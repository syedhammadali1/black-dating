<?php
$lookingFor = getUserSettings('looking_for');
$minAge = getUserSettings('min_age');
$maxAge = getUserSettings('max_age');

if (request()->session()->has('userSearchData')) {
    $userSearchData = session('userSearchData');
    $lookingFor = $userSearchData['looking_for'];
    $minAge = $userSearchData['min_age'];
    $maxAge = $userSearchData['max_age'];
}
?>
<style>
    .lw-page-content{
        padding: 0;
    }
    .search-section{
        margin-top: 0px !important;
        border: 1px solid rgba(0,0,0,.125);
    }
    .card-bg-color-light{
        background-color: rgba(0,0,0,.03);
    }
    .custom-select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        /* background: #fff url(data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5'%3E%3Cpath fill='%23343a40' d='M2 0 0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E) right 0.75rem center/8px 10px no-repeat; */
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        color: #495057;
        display: inline-block;
        font-size: 1rem;
        font-weight: 400;
        height: calc(1.5em + 0.75rem + 2px);
        line-height: 1.5;
        padding: 0.375rem 1.75rem 0.375rem 0.75rem;
        vertical-align: middle;
        width: 100%;
    }
    .filter-collapsable.collapsed:after {
        content: "";
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        float: right;
    }
    .filter-collapsable:after {
        content: "";
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        float: right;
    }
    .filter-collapsable {
        color: #343a40;
    }
</style>

<div class="col-4">
    <form data-show-processing="true" action="<?= route('user.read.find_matches') ?>">
        <section class="search-section card search-basic visible-filters-open my-3 my-md-4" style="margin-top: 0px !important;">
            <form data-show-processing="true" action="<?= route('user.read.find_matches') ?>">
            <div class="card-bg-color-light card-header d-flex justify-content-between" style="background-color: rgba(0,0,0,.03);">
                Basic search
                <a href="{{url('find-matches?looking_for=all&form=allcountries&last_online=anytime')}}" class="text-muted reset-button has-tooltip d-none d-md-block" data-toggle="tooltip" data-container="body" data-placement="top" data-animation="false" title="" data-original-title="Reset filters to show all the results">
                    reset <i class="fas fa-times-circle"></i>
                </a>
            </div>
            <div class="card-body">
                <div class="">
                    <label for="lookingFor"><?= __tr('Search') ?></label>
                    <select name="looking_for" class="custom-select" id="lookingFor">
                        <option value="all"><?= __tr('All') ?></option>
                        @foreach(configItem('user_settings.gender') as $genderKey => $gender)
                        <option value="<?= $genderKey ?>" <?= (request()->looking_for == $genderKey or $genderKey == $lookingFor) ? 'selected' : '' ?>><?= $gender ?></option>
                        @endforeach
                    </select>
                </div>

{{--                <div class="" style="display: none">--}}
{{--                    <label for="minAge"><?= __tr('Age Between') ?></label>--}}
{{--                    <div style="display: flex;align-items: baseline;">--}}
{{--                    <select name="min_age" class="custom-select" id="minAge">--}}
{{--                        @foreach(configItem('user_settings.age_range') as $age)--}}
{{--                        <option value="<?= $age ?>" <?= (request()->min_age == $age or $age == $minAge) ? 'selected' : '' ?>><?= __tr('__translatedAge__', [--}}
{{--                                                                                                                                    '__translatedAge__' => $age--}}
{{--                                                                                                                                ]) ?></option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                    <label for="minAge">-</label>--}}
{{--                    <select name="max_age" class="custom-select" id="maxAge">--}}
{{--                        @foreach(configItem('user_settings.age_range') as $age)--}}
{{--                        <option value="<?= $age ?>" <?= (request()->max_age == $age or $age == $maxAge) ? 'selected' : '' ?>><?= __tr('__translatedAge__', [--}}
{{--                                                                                                                                    '__translatedAge__' => $age--}}
{{--                                                                                                                                ]) ?></option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="" style="background-color: rgba(0,0,0,.03); display: none">--}}
{{--                    <label class="justify-content-start" for="distance"><?= __tr('Distance in __distanceUnit__', ['__distanceUnit__' => (getStoreSettings('distance_measurement') == '6371') ? 'KM' : 'Miles']) ?></label>--}}
{{--                    <input type="text" class="custom-select" name="distance" value="<?= (request()->distance != null) ? request()->distance : getUserSettings('distance') ?>" placeholder="<?= __tr('Anywhere') ?>">--}}
{{--                </div>--}}

                <div class="pt-2">
                        <label class="justify-content-start" for="from"><?= __tr('From') ?></label>
                        <select id="from" name="form" class="custom-select">
                            <option value="allcountries">All Countries</option>
                            @foreach(App\Yantrana\Support\Country\Models\Country::all() as $countryitem)
                                <option class="datacountryid" {{ request()->form == $countryitem->_id ? 'selected' : '' }} value="{{$countryitem->_id}}" data-id="{{$countryitem->iso_code}}">
                                    {{$countryitem->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                <div class="pt-2">
                    <label class="justify-content-start" for="distance"><?= __tr('Last Online') ?></label>
                    <select id="last_online" name="last_online" class="custom-select">
                        <option value="anytime" selected="">any time</option>
                        <option value="24h">24h</option>
                        <option value="1week">1week</option>
                        <option value="1month">1month</option>
                    </select>
                </div>

                <div class="pt-2">
                    <div class="checkbox-group mt-1 has-filters">
                        <div class="custom-control custom-checkbox">
                            <input id="photo-hidden" type="hidden" name="photohide" value="0">
                            <input id="photo-checkbox" type="checkbox" name="photochkbox" class="custom-control-input">
                            <label for="photo-checkbox" class="custom-control-label">
                                only profiles with photos
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer hidden-filters-open">
                <button class="btn btn-primary btn-block">
                    Search now
                </button>
            </div>
            </form>
        </section>
        <form class="" action="<?= route('user.read.find_matches') ?>">
            <section id="advanced-search-card" class="search-section card search-advanced visible-filters-open my-4">
                <div class="card-header d-flex justify-content-between" style="background-color: rgba(0,0,0,.03);">
                    Advanced search
                    <a href="{{url('find-matches?looking_for=all&form=allcountries&last_online=anytime')}}" class="text-muted reset-button has-tooltip d-none d-md-block" data-toggle="tooltip" data-container="body" data-placement="top" data-animation="false" title="" data-original-title="Reset filters to show all the results">
                        reset <i class="fas fa-times-circle"></i>
                    </a>
                </div>

                <ul class="list-group list-group-flush">

                    <li id="filter_city_extend_group" class="list-group-item" hidden="">
                        <div id="city-extend-card-default" class="form-group-horizontal">
                            <label for="filter_city_extend" class="col-form-label">
                                Max distance (km)
                            </label>
                            <select id="filter_city_extend" name="city_extend" class="custom-select">
                                <option value="0" selected="">0 km</option>
                                <option value="50">50 km</option>
                                <option value="100">100 km</option>
                                <option value="150">150 km</option>
                                <option value="200">200 km</option>
                                <option value="250">250 km</option>
                                <option value="300">300 km</option>
                            </select>
                        </div>

                        <div id="city-extend-card-slider" hidden="">
                            <label class="col-form-label d-flex justify-content-between">
                                Max distance (km)
                                <span id="label_city_extend">
                                
                            </span>
                            </label>

                            <div id="slider-city-extend"></div>
                        </div>
                    </li>

                    <li class="list-group-item checkbox-group">
                        <div class="">
                            <label for="minAge"><?= __tr('Age Between') ?></label>
                            <div style="display: flex;align-items: baseline;">
                                <select name="" class="custom-select min_age" id="minAge">
                                    @foreach(configItem('user_settings.age_range') as $age)
                                        <option value="<?= $age ?>" <?= (request()->min_age == $age or $age == $minAge) ? 'selected' : '' ?>><?= __tr('__translatedAge__', [
                                                '__translatedAge__' => $age
                                            ]) ?></option>
                                    @endforeach
                                </select>
                                <label for="maxAge">-</label>
                                <select name="" class="custom-select max_age" id="maxAge">
                                    @foreach(configItem('user_settings.age_range') as $age)
                                        <option value="<?= $age ?>" <?= (request()->max_age == $age or $age == $maxAge) ? 'selected' : '' ?>><?= __tr('__translatedAge__', [
                                                '__translatedAge__' => $age
                                            ]) ?></option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item checkbox-group">
                        @foreach($userSpecifications['groups'] as $specKey => $specifications)
                            {{--                        @dd($specKey,$specifications)--}}
                            @if($specKey != 'favorites')
                                @foreach(collect($specifications['items'])->chunk(3) as $specification)
                                    @foreach($specification as $itemKey => $item)
                                        @if($item['input_type'] == 'select')
                                            @if($itemKey == 'height')
                                                <label for="min_height"><?= __tr('Height (cm)') ?></label>
                                                <div id="<?= $item['name'] ?>" style="display: flex;align-items: baseline;">
                                                    <select name="min_height" class="form-control" id="min_height">
                                                        <option value="" selected><?= __tr('Min Height') ?></option>
                                                        @foreach($item['options'] as $optionKey => $option)
                                                            <option value="<?= $optionKey ?>" <?= (request()->min_height == $optionKey) ? 'selected' : '' ?>><?= $option ?></option>
                                                        @endforeach
                                                    </select>
                                                    <label for="max_height">-</label>
                                                    <select name="max_height" class="form-control" id="max_height">
                                                        <option value="" selected><?= __tr('Max Height') ?></option>
                                                        @foreach($item['options'] as $optionKey => $option)
                                                            <option value="<?= $optionKey ?>" <?= (request()->max_height == $optionKey) ? 'selected' : '' ?>><?= $option ?></option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endforeach
                            @endif
                        @endforeach
                    </li>

                    <li class="list-group-item checkbox-group">
                        <label for="filterbycity"><?= __tr('City (select country first)') ?></label>
{{--                            <input type="search" id="filterbycity" class="form-control" value="" disabled>--}}
                        <select id="filterbycity" name="filterbycity" class="custom-select filterbycity">
                            <option disabled selected> Select Country First !</option>
                        </select>
                    </li>

                    <li class="list-group-item checkbox-group">
                        <a data-toggle="collapse" href="#language" class="collapsible filter-collapsable collapsed" aria-expanded="false">
                            <?= __tr('Language') ?>
                            <span class="nb"></span></a>

                        <div id="language" class="collapse" style="">
                            @foreach($userSettings['preferred_language'] as $langKey => $language)

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="language[<?= $langKey  ?>]" name="language[<?= $langKey  ?>]" value="<?= $langKey  ?>" <?= (!__isEmpty(request()->language) and array_key_exists($langKey, request()->language)) ? 'checked' : '' ?>>
                                    <label class="custom-control-label" for="language[<?= $langKey  ?>]"><?= $language ?></label>
                                </div>

                            @endforeach

                        </div>
                    </li>
                    <li class="list-group-item checkbox-group">
                        <a data-toggle="collapse" href="#relationship-status-card" class="collapsible filter-collapsable collapsed" aria-expanded="false">
                            <?= __tr('Relationship Status') ?>
                            <span class="nb"></span></a>

                        <div id="relationship-status-card" class="collapse" style="">
                            @foreach($userSettings['relationship_status'] as $relStatusKey => $relationship)
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="relationship_status[<?= $relStatusKey  ?>]" name="relationship_status[<?= $relStatusKey  ?>]" value="<?= $relStatusKey  ?>" <?= (!__isEmpty(request()->relationship_status) and array_key_exists($relStatusKey, request()->relationship_status)) ? 'checked' : '' ?>>
                                    <label class="custom-control-label" for="relationship_status[<?= $relStatusKey  ?>]"><?= $relationship ?></label>
                                </div>
                            @endforeach

                        </div>
                    </li>
{{--                    <li class="list-group-item checkbox-group">--}}
{{--                        <a data-toggle="collapse" href="#work_status" class="collapsible filter-collapsable collapsed" aria-expanded="false">--}}
{{--                            <?= __tr('Work Status') ?>--}}
{{--                            <span class="nb"></span></a>--}}

{{--                        <div id="work_status" class="collapse" style="">--}}
{{--                            @foreach($userSettings['work_status'] as $workStatusKey => $workStatus)--}}
{{--                                <div class="col-sm-12 col-md-4">--}}
{{--                                    <div class="custom-control custom-checkbox">--}}
{{--                                        <input type="checkbox" class="custom-control-input" id="work_status[<?= $workStatusKey  ?>]" name="work_status[<?= $workStatusKey  ?>]" value="<?= $workStatusKey  ?>" <?= (!__isEmpty(request()->work_status) and array_key_exists($workStatusKey, request()->work_status)) ? 'checked' : '' ?>>--}}
{{--                                        <label class="custom-control-label" for="work_status[<?= $workStatusKey  ?>]"><?= $workStatus ?></label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}

{{--                        </div>--}}
{{--                    </li>--}}
                    <li class="list-group-item checkbox-group">
                        <a data-toggle="collapse" href="#educations" class="collapsible filter-collapsable collapsed" aria-expanded="false">
                            <?= __tr('Education') ?>
                            <span class="nb"></span></a>

                        <div id="educations" class="collapse" style="">
                            @foreach($userSettings['educations'] as $educationKey => $education)
                                <div class="col-sm-12 col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="work_status[<?= $educationKey  ?>]" name="education[<?= $educationKey  ?>]" value="<?= $educationKey  ?>" <?= (!__isEmpty(request()->education) and array_key_exists($educationKey, request()->education)) ? 'checked' : '' ?>>
                                        <label class="custom-control-label" for="work_status[<?= $educationKey  ?>]"><?= $education ?></label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </li>
                    {{--                @dd($userSpecifications)--}}
                    @foreach($userSpecifications['groups'] as $specKey => $specifications)
                        @if($specKey != 'favorites')
                            {{-- <li class="list-group-item checkbox-group"> --}}
                            {{-- <div class="tab-pane fade" id="<?= $specKey ?>" role="tabpanel" aria-labelledby="<?= $specKey ?>-tab"> --}}
                            @foreach(collect($specifications['items'])->chunk(3) as $specification)
                                @foreach($specification as $itemKey => $item)
                                    @if($itemKey == 'height' || $itemKey == 'car')
                                        @continue
                                    @endif
                                    {{-- @dd($item['name']) --}}
                                    <li class="list-group-item checkbox-group">
                                        <a data-toggle="collapse" href="#<?= str_replace(' ', '_', $item['name']) ?>" class="collapsible filter-collapsable collapsed" aria-expanded="false">
                                            <?= $item['name'] ?>
                                            {{--                        @if($item['name'] == 'Body Type')--}}
                                            {{--                            @dd(str_replace("_"," ", "Body Type") , $item['name'])--}}
                                            {{--                         @endif--}}
                                            <span class="nb"></span></a>
                                        @if($item['input_type'] == 'select')
                                            @if($itemKey == 'height')
                                                {{-- <div class="lw-specification-sub-heading">
                                                    <?= $item['name'] ?>
                                                </div> --}}
                                                <div id="<?= $item['name'] ?>" class="collapse" style="">
                                                    <select name="min_height" class="form-control" id="min_height">
                                                        <option value="" selected><?= __tr('Select Min Height') ?></option>
                                                        @foreach($item['options'] as $optionKey => $option)
                                                            <option value="<?= $optionKey ?>" <?= (request()->min_height == $optionKey) ? 'selected'  : '' ?>><?= $option ?></option>
                                                        @endforeach
                                                    </select>
                                                    <select name="max_height" class="form-control" id="max_height">
                                                        <option value="" selected><?= __tr('Select Max Height') ?></option>
                                                        @foreach($item['options'] as $optionKey => $option)
                                                            <option value="<?= $optionKey ?>" <?= (request()->max_height == $optionKey) ? 'selected'  : '' ?>><?= $option ?></option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            @else
                                                {{-- <div class="lw-specification-sub-heading">
                                                    <?= $item['name'] ?>
                                                </div> --}}
                                                <div id="<?= str_replace(' ', '_', $item['name']) ?>" class="collapse" style="">
                                                    @foreach($item['options'] as $optionKey => $option)
                                                        <div class="col-sm-12 col-md-12">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="<?= $itemKey ?>[<?= $optionKey  ?>]" name="<?= $itemKey ?>[<?= $optionKey ?>]" <?= (!__isEmpty(request()->$itemKey) and array_key_exists($optionKey, request()->$itemKey)) ? 'checked' : '' ?>>
                                                                <label class="custom-control-label" for="<?= $itemKey ?>[<?= $optionKey  ?>]"><?= $option ?></label>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        @endif
                                    </li>
                                @endforeach
                            @endforeach
                            {{-- </li> --}}
                        @endif
                    @endforeach

                </ul>

                <div class="card-footer border-top-0 hidden-filters-open">
                    <button class="btn btn-primary btn-block">
                        Search now
                    </button>
                </div>

            </section>
        </form>

        <section class="search-section card visible-filters-open my-4">
            <form data-show-processing="true" method="POST" action="<?= route('user.read.first_name_find_matches') ?>">
                @csrf
                <div class="card-header d-flex justify-content-between" style="background-color: rgba(0,0,0,.03)">
                    First name search
                    <a href="{{url('find-matches?looking_for=all&form=allcountries&last_online=anytime')}}" class="text-muted reset-button has-tooltip d-none d-md-block" data-toggle="tooltip" data-container="body" data-placement="top" data-animation="false" title="" data-original-title="Reset filters to show all the results">
                        reset
                        <i class="fas fa-times-circle"></i>
                    </a>
                </div>
                <div class="card-body">
                    <input type="search" id="filter_firstname" name="firstname" class="form-control" style="border: 1px solid #c6c6c6;" value="{{request()->firstname}}" required>
                    <div class="card-footer hidden-filters-open" style="background-color: #ffff">
                        <button class="btn btn-primary btn-block">Search now</button>
                    </div>
                </div>
            </form>
        </section>


        <section class="d-md-none visible-filters-open my-4">
            <button class="btn btn-primary btn-lg btn-block">
                Apply filters
            </button>
            <button type="reset" class="btn btn-outline-danger btn-lg btn-block reset-button">
                Reset filters
            </button>
        </section>

    </form>
</div>