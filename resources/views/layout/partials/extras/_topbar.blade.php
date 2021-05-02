{{-- Topbar --}}
<div class="topbar">

{{--    --}}{{-- Search --}}
{{--    @if (config('layout.extras.search.display'))--}}
{{--        @if (config('layout.extras.search.layout') == 'offcanvas')--}}
{{--            <div class="topbar-item">--}}
{{--                <div class="btn btn-icon btn-clean btn-lg mr-1" id="kt_quick_search_toggle">--}}
{{--                    {{ Metronic::getSVG("media/svg/icons/General/Search.svg", "svg-icon-xl svg-icon-primary") }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @else--}}
{{--            <div class="dropdown" id="kt_quick_search_toggle">--}}
{{--                --}}{{-- Toggle --}}
{{--                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">--}}
{{--                    <div class="btn btn-icon btn-clean btn-lg btn-dropdown mr-1">--}}
{{--                       {{ Metronic::getSVG("media/svg/icons/General/Search.svg", "svg-icon-xl svg-icon-primary") }}--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                --}}{{-- Dropdown --}}
{{--                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">--}}
{{--                    @include('layout.partials.extras.dropdown._search-dropdown')--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--    @endif--}}



{{--    --}}{{-- Quick Actions --}}
{{--    @if (config('layout.extras.quick-actions.display'))--}}
{{--        @if (config('layout.extras.quick-actions.layout') == 'offcanvas')--}}
{{--            <div class="topbar-item">--}}
{{--                <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1" id="kt_quick_actions_toggle">--}}
{{--                    {{ Metronic::getSVG("media/svg/icons/Media/Equalizer.svg", "svg-icon-xl svg-icon-primary") }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @else--}}
{{--            <div class="dropdown">--}}
{{--                --}}{{-- Toggle --}}
{{--                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">--}}
{{--                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">--}}
{{--                        {{ Metronic::getSVG("media/svg/icons/Media/Equalizer.svg", "svg-icon-xl svg-icon-primary") }}--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                --}}{{-- Dropdown --}}
{{--                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">--}}
{{--                    @include('layout.partials.extras.dropdown._quick-actions')--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--    @endif--}}

{{--    --}}{{-- My Cart --}}
{{--    @if (config('layout.extras.cart.display'))--}}
{{--        <div class="dropdown">--}}
{{--            --}}{{-- Toggle --}}
{{--            <div class="topbar-item"  data-toggle="dropdown" data-offset="10px,0px">--}}
{{--                <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">--}}
{{--                    {{ Metronic::getSVG("media/svg/icons/Shopping/Cart3.svg", "svg-icon-xl svg-icon-primary") }}--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            --}}{{-- Dropdown --}}
{{--            <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-xl dropdown-menu-anim-up">--}}
{{--                <form>--}}
{{--                    @include('layout.partials.extras.dropdown._cart')--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    --}}{{-- Quick panel --}}
{{--    @if (config('layout.header.topbar.quick-panel.display'))--}}
{{--        <div class="topbar-item">--}}
{{--            <div class="btn btn-icon btn-clean btn-lg mr-1" id="kt_quick_panel_toggle">--}}
{{--                {{ Metronic::getSVG("media/svg/icons/Layout/Layout-4-blocks.svg", "svg-icon-xl svg-icon-primary") }}--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    --}}{{-- Languages --}}
{{--    @if (config('layout.extras.languages.display'))--}}
{{--        <div class="dropdown">--}}
{{--            <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">--}}
{{--                <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">--}}
{{--                    <img class="h-20px w-20px rounded-sm" src="{{ asset('media/svg/flags/226-united-states.svg') }}" alt=""/>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">--}}
{{--                @include('layout.partials.extras.dropdown._languages')--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}


    {{-- Notifications --}}
    @if (config('layout.extras.notifications.display'))
        @if (config('layout.extras.notifications.layout') == 'offcanvas')
            <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-0">
                    <div class="d-flex flex-column text-right pr-3">
                        <span class="text-primary font-weight-bolder font-size-base d-md-inline mr-3">{{Auth::user()->name }}</span>

                        <span class="text-muted font-weight-bold font-size-base d-md-inline mr-1">{{Auth::user()->title }}</span>
                    </div>
                    <span class="symbol symbol-45 symbol-light-primary">
                                                        <img alt="Avatar" src="{{asset(Auth::user()->avatar)}}"/>
                        </span>
                </div>
            </div>
{{--                <div class="btn btn-icon btn-clean btn-lg mr-1 pulse pulse-primary" id="kt_quick_notifications_toggle">--}}
{{--                    {{ Metronic::getSVG("media/svg/icons/Code/Compiling.svg", "svg-icon-xl svg-icon-primary") }}--}}
{{--                    <span class="pulse-ring"></span>--}}
{{--                </div>--}}
            </div>
        @else
            <div class="dropdown">
                {{-- Toggle --}}
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-0">
                        <div class="d-flex flex-column text-right pr-3">
                            <span class="text-primary font-weight-bolder font-size-base d-md-inline mr-3">{{Auth::user()->name }}</span>

                            <span class="text-muted font-weight-bold font-size-base d-md-inline mr-1">{{Auth::user()->title }}</span>
                        </div>
                        <span class="symbol symbol-45 symbol-light-primary">
                                                        <img alt="Avatar" src="{{asset(Auth::user()->avatar)}}"/>
                        </span>
                    </div>
                </div>

                {{-- Dropdown --}}
{{--                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">--}}
{{--                    <form>--}}
{{--                        @include('layout.partials.extras.dropdown._notifications')--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">--}}
{{--                    <form>--}}
{{--                        @include('layout.partials.extras.dropdown._notifications')--}}
{{--                    </form>--}}
{{--                </div>--}}

                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                    {{-- Navigation --}}
                    <ul class="navi navi-hover">
                        <li class="navi-header font-weight-bold">
                            Quick Menu
                        </li>
                        <li class="navi-separator mb-3"></li>
                        <li class="navi-item">
                            <a href="{{route('logout')}}" class="navi-link">
                                <span class="navi-icon"><i class="flaticon-logout"></i></span>
                                <span class="navi-text">Logout</span>
                            </a>
                        </li>
{{--                        <li class="navi-item">--}}
{{--                            <a href="#" class="navi-link">--}}
{{--                                <span class="navi-icon"><i class="flaticon2-calendar-8"></i></span>--}}
{{--                                <span class="navi-text">Support Cases</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                    </ul>
                </div>

            </div>
        @endif
    @endif

{{--    --}}{{-- User --}}
{{--    @if (config('layout.extras.user.display'))--}}
{{--        @if (config('layout.extras.user.layout') == 'offcanvas')--}}
{{--            <div class="topbar-item">--}}
{{--                <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">--}}
{{--                    <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>--}}
{{--                    <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Sean</span>--}}
{{--                    <span class="symbol symbol-35 symbol-light-success">--}}
{{--                        <span class="symbol-label font-size-h5 font-weight-bold">S</span>--}}
{{--                    </span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @else--}}
{{--            <div class="dropdown">--}}
{{--                --}}{{-- Toggle --}}
{{--                <div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">--}}
{{--                    <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2">--}}
{{--                        <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>--}}
{{--                        <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Sean</span>--}}
{{--                        <span class="symbol symbol-35 symbol-light-success">--}}
{{--                            <span class="symbol-label font-size-h5 font-weight-bold">S</span>--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                --}}{{-- Dropdown --}}
{{--                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">--}}
{{--                    @include('layout.partials.extras.dropdown._user')--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--    @endif--}}
</div>
