<?php
/**
* HomeController.php - Controller file
*
* This file is part of the Home component.
*-----------------------------------------------------------------------------*/

namespace App\Yantrana\Components\Home\Controllers;

use App\Yantrana\Base\BaseController;
use App\Yantrana\Components\Home\HomeEngine;
use App\Yantrana\Components\User\UserEncounterEngine;
use App\Yantrana\Components\Filter\FilterEngine;
use App\Yantrana\Support\CommonUnsecuredPostRequest;
use App\Yantrana\Components\Pages\ManagePagesEngine;
use App\Yantrana\Components\UserSetting\UserSettingEngine;
use App\Models\Package;
use App\Yantrana\Components\User\Models\UserProfile;
use App\Yantrana\Components\User\Models\UserSubscription;
use App\Yantrana\Support\Country\Models\Country;
use Illuminate\Http\Request;
use Session;
use Stripe;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class HomeController extends BaseController
{
    /**
     * @var  HomeEngine $homeEngine - Home Engine
     */
    protected $homeEngine;

    /**
     * @var  UserEncounterEngine $userEncounterEngine - UserEncounter Engine
     */
    protected $userEncounterEngine;

    /**
     * @var  FilterEngine $filterEngine - Filter Engine
     */
    protected $filterEngine;

    /**
     * @var  ManagePagesEngine $managePageEngine - Manage Pages Engine
     */
    protected $managePageEngine;

    /**
     * @var  UserSettingEngine $userSettingEngine - UserSetting Engine
     */
    protected $userSettingEngine;

    /**
     * Constructor
     *
     * @param  HomeEngine $homeEngine - Home Engine
     * @param  ManagePagesEngine $managePageEngine - Manage Pages Engine
     *
     * @return  void
     *-----------------------------------------------------------------------*/

    function __construct(
        HomeEngine $homeEngine,
        UserEncounterEngine $userEncounterEngine,
        FilterEngine $filterEngine,
        ManagePagesEngine $managePageEngine,
        UserSettingEngine $userSettingEngine
    ) {
        $this->homeEngine           = $homeEngine;
        $this->userEncounterEngine     = $userEncounterEngine;
        $this->filterEngine         = $filterEngine;
        $this->managePageEngine         = $managePageEngine;
        $this->userSettingEngine = $userSettingEngine;
    }



    /**
     * Show login view.
     *---------------------------------------------------------------- */

    public function landingLoginPage(){
        
        return $this->loadView('outer-home-login');
    }

    
    public function about_us(){
       return view('pages.inner-pages.about-us');
    }


    public function step_form(){
        return view('pages.inner-pages.form');
     }

     
    public function step_form_save(Request $request){

        // dd('asd');
        DB::update('update users set is_questionary = 1 where username = ?', [getUserAuthInfo('profile.username')]);
        
        return redirect()->route('user.read.find_matches');
        // return redirect()->route('user.profile_view', ['username' => getUserAuthInfo('profile.username')]);
     }


    public function contact_us(){
        return view('pages.inner-pages.contact-us');
    }

    public function term_conditions(){
        return view('pages.inner-pages.terms-and-conditions');
    }

    public function payment(){

        $package = Package::take(4)->orderBy('id','asc')->get();
  
        $user = Auth::user();

        $today_date = date('Y-m-d H:i:s');

        $check_user_subscription_exists = UserSubscription::where('users__id',Auth::id())->where('expiry_at','>=', $today_date)->first();

    //    dd($check_user_subscription_exists);

        return view('pages.inner-pages.payment',compact('package',$package,'user',$user,'check_user_subscription_exists',$check_user_subscription_exists));
    }


    public function stripePost(Request $request)
    {

        $date =  Carbon::createFromFormat('d/m/Y', $request->expiry_date)->format('Y-m-d');

        $user_profile = UserProfile::where('users__id',Auth::id())->first();

        $user_subscription = UserSubscription::where('users__id',Auth::id())->first();

        if(isset($user_profile)){

            $user_profile->package_id = $request->package_id;
            $user_profile->save();

            $amount = (int)$request->amount;

            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            Stripe\Charge::create ([
                    "amount" => $amount * 100,
                    "currency" => "usd",
                    "source" => $request->stripeToken
            ]);


            if ($user_subscription == null) {

                

                $user = Auth::user();
                
         

                $user_subscription = new UserSubscription;
                $user_subscription->_uid = $user->_uid;
                $user_subscription->users__id = Auth::id();
                $user_subscription->package_id = $request->package_id;
                $user_subscription->expiry_at = $date;
                $user_subscription->save();
                # code...
            }

            else{

                $user = Auth::user();
                
                $currentDateTime = Carbon::now();

                $user_subscription =  UserSubscription::where('users__id',Auth::id())->first();

                if (isset($user_subscription)) {

                    $user_subscription->_uid = $user->_uid;
                    $user_subscription->users__id = $user->id;
                    $user_subscription->package_id = $request->package_id;
                    $user_subscription->expiry_at = $date;
                    $user_subscription->save();
                }
         

            }
       
               
            return back();

        }

      

    }

    /**
     * View Home Page
     *---------------------------------------------------------------- */
    public function homePage()
    {
        // get encounter data
        $encounterData = $this->userEncounterEngine->getEncounterUserData();
        // For Random search use following function
        $basicSearchData = $this->filterEngine->prepareRandomUserData([], 12);

        $userCountryId = getUserAuthInfo()['profile']['country'];
//        $userCountryCode = Country::find($userCountryId);
        $userCountryCode = Country::find(226);
//        $statsByUserCountry['statsByUserCountry'] = DB::table('states')->where('country_code',$userCountryCode->iso_code)->get()->toArray();
        $statsByUserCountry['statsByUserCountry'] = DB::table('states')->where('country_code','US')->orderBy('name')->get()->toArray();

        $basicSearchData['data']['statsByUserCountry'] = $statsByUserCountry['statsByUserCountry'];

        // merge encounter data and basic data
        $processReaction = array_merge($encounterData['data'], $basicSearchData['data']);

        return $this->loadPublicView('home', $processReaction);
    }

    /**
     * ChangeLocale - It also managed from index.php.
     *---------------------------------------------------------------- */
    protected function changeLocale(CommonUnsecuredPostRequest $request, $localeId = null)
    {
        if (is_string($localeId)) {
            changeAppLocale($localeId);
            if (isLoggedIn()) {
                $this->userSettingEngine->processUserSettingStore('site_defaults', [
                    'selected_locale' => $localeId
                ]);
            }
        }
        if ($request->has('redirectTo')) {
            header('Location: ' . base64_decode($request->get('redirectTo')));
            exit();
        }

        return __tr('Invalid Request');
    }

    /**
     * Change Theme
     *---------------------------------------------------------------- */
    protected function changeTheme(CommonUnsecuredPostRequest $request, $themeName = null)
    {
        if (is_string($themeName) and in_array($themeName, [
            'light',
            'dark'
        ])) {
            $this->userSettingEngine->processUserSettingStore('site_defaults', [
                'selected_theme' => $themeName
            ]);
        }
        if ($request->has('redirectTo')) {
            header('Location: ' . base64_decode($request->get('redirectTo')));
            exit();
        }

        return __tr('Invalid Request');
    }

    /**
     * preview page
     *---------------------------------------------------------------- */
    public function previewPage($pageUid, $title)
    {
        $processReaction = $this->managePageEngine->previewPage($pageUid);

        return $this->loadView('pages.preview', $processReaction['data'], [
            'compress_page' => false
        ]);
    }

    /**
     * preview landing page
     *---------------------------------------------------------------- */
    public function landingPage()
    {
        return $this->loadView('outer-home', [
            'genders' => configItem('user_settings.gender')
        ]);
    }

    /**
     * Search Matches
     *---------------------------------------------------------------- */
    public function searchMatches(CommonUnsecuredPostRequest $request)
    {
        $inputData = $request->all();
        // Set user search data into session
        session()->put('userSearchData', [
            "looking_for"   => $inputData['looking_for'],
            "min_age"       => $inputData['min_age'],
            "max_age"       => $inputData['max_age']
        ]);

        return redirect()->route('user.sign_up');
    }
}
