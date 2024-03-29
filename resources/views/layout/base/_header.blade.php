{{-- Header --}}
<div style="background: url({{asset('media/topbar-bg.png')}}); background-repeat: no-repeat;
    background-size: cover;" id="kt_header" class="header {{ Metronic::printClasses('header', false) }}" {{ Metronic::printAttrs('header') }}>

    {{-- Container --}}
    <div class="container-fluid d-flex align-items-center justify-content-between">
        @if (config('layout.header.self.display'))

            @php
                $kt_logo_image = 'ems-logo-sidebar.png';
            @endphp

            @if (config('layout.header.self.theme') === 'light')
                @php $kt_logo_image = 'ems-logo-sidebar.png' @endphp
            @elseif (config('layout.header.self.theme') === 'dark')
                @php $kt_logo_image = 'ems-logo-sidebar.png' @endphp
            @endif

            {{-- Header Menu --}}
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                @if(config('layout.aside.self.display') == false)
                    <div class="header-logo">
                        <a href="{{ url('/') }}">
                            <img alt="Logo" src="{{ asset('media/logos/'.$kt_logo_image) }}"/>
                        </a>
                    </div>
                @endif


{{--                <div id="kt_header_menu" class="header-menu header-menu-mobile {{ Metronic::printClasses('header_menu', false) }}" {{ Metronic::printAttrs('header_menu') }}>--}}
{{--                    <ul class="menu-nav {{ Metronic::printClasses('header_menu_nav', false) }}">--}}
{{--                        {{ Menu::renderHorMenu(config('menu_header.items')) }}--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>



        @else
            <div></div>
        @endif

        @include('layout.partials.extras._topbar')
    </div>
</div>
