<?php
/**
* FilterController.php - Controller file
*
* This file is part of the Filter component.
*-----------------------------------------------------------------------------*/

namespace App\Yantrana\Components\Filter\Controllers;

use App\Yantrana\Base\BaseController;
use App\Yantrana\Components\Filter\FilterEngine;
use App\Yantrana\Support\CommonUnsecuredPostRequest;
use App\Yantrana\Support\Country\Models\Country;
use Illuminate\Support\Facades\DB;

class FilterController extends BaseController
{
    /**
     * @var  FilterEngine $filterEngine - Filter Engine
     */
    protected $filterEngine;

    /**
     * Constructor
     *
     * @param  FilterEngine $filterEngine - Filter Engine
     *
     * @return  void
     *-----------------------------------------------------------------------*/

    function __construct(FilterEngine $filterEngine)
    {
        $this->filterEngine = $filterEngine;
    }

    /**
     * Get Filter data and show filter view
     *
     * @param obj CommonUnsecuredPostRequest $request
     * 
     * return view
     *-----------------------------------------------------------------------*/
    public function getFindMatches(CommonUnsecuredPostRequest $request)
    {
        $processReaction = $this->filterEngine->processFilterData($request->all());

        $userCountryId = getUserAuthInfo()['profile']['country'];
        $userCountryCode = Country::find($userCountryId);
//        $statsByUserCountry['statsByUserCountry'] = DB::table('states')->where('country_code',$userCountryCode->iso_code)->get()->toArray();
        $statsByUserCountry['statsByUserCountry'] = DB::table('states')->where('country_code','US')->orderBy('name')->get()->toArray();

        $processReaction['data']['statsByUserCountry'] = $statsByUserCountry['statsByUserCountry'];

        if ($request->ajax()) {
            return $this->responseAction(
                $this->processResponse($processReaction, [], [], true),
                $this->replaceView('filter.find-matches', $processReaction['data'])
            );
        } else {
            return $this->loadPublicView('filter.filter', $processReaction['data']);
        }
    }
}
