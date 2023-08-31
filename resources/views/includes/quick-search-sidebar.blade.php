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
    .list-fa ul li{
        list-style-type: none;
    }
    .list-fa ul{
        padding-left: 0;
    }
    .list-fa ul li:before, ul.list-fa li:before{
        left: 0;
    }
</style>
<div class="col-4">
    <section class="search-section card search-basic visible-filters-open my-3 my-md-4"
             style="margin-top: 0px !important;">
        <div class="card-bg-color-light card-header d-flex justify-content-between" style="background-color: rgba(0,0,0,.03);">
            Quick Search
        </div>

        <div class="card-body p-0">
            <div class="">
                <div class="list-group list-group-flush">
                    <a href="{{route('user.online')}}"
                       class="list-group-item d-flex justify-content-between align-items-center {{ makeLinkActive('user.online') }}">
                        Online members
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <a href="{{route('user.new_members')}}" class="list-group-item d-flex justify-content-between align-items-center {{ makeLinkActive('user.new_members') }} ">
                        New members
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <a href="{{route('user.today_birthday')}}" class="list-group-item d-flex justify-content-between align-items-center {{ makeLinkActive('user.today_birthday') }} ">
                        It’s their birthday today
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="search-section card search-basic visible-filters-open my-3 my-md-4"
             style="margin-top: 0px !important;">
        <div class="card-bg-color-light card-header d-flex justify-content-between" style="background-color: rgba(0,0,0,.03);">
            <span><i class="fas fa-star"></i> Upgrade to Premium</span>
        </div>

        <div class="card-body">
            <div class="list-fa list-fa-check-circle text-success">
                <ul>
                    <li><i class="fas fa-check-circle"></i> Read and send messages</li>
                    <li><i class="fas fa-check-circle"></i> Show first in search results</li>
                    <li><i class="fas fa-check-circle"></i> Upload unlimited photos</li>
                </ul>
            </div>
            <a href="#membership" class="btn btn-success btn-block">
                <i class="fas fa-check-circle"></i>
                Upgrade now
            </a>
        </div>
    </section>

    <section class="search-section card search-basic visible-filters-open my-3 my-md-4"
             style="margin-top: 0px !important;">
        <div class="card-bg-color-light card-header d-flex justify-content-between" style="background-color: rgba(0,0,0,.03);">
            <span>Help & FAQ</span>
        </div>

        <div class="card-body">
            <p>
                @if (str_contains(Request::route()->getName(), 'user.online'))
                    Showing members from all countries who are online now.
                @elseif (str_contains(Request::route()->getName(), 'user.new_members'))
                    Showing members from all countries who signed up less than a week ago.
                @elseif (str_contains(Request::route()->getName(), 'user.today_birthday'))
                    Showing members from all countries whose birthday is today.
                @endif
            </p>
        </div>
    </section>
</div>