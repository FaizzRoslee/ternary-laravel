{{-- Header --}}
@if (config('layout.extras.notifications.dropdown.style') == 'light')
    <div class="d-flex flex-column pt-12 bg-dark-o-5 rounded-top">
        {{-- Title --}}
        <h4 class="d-flex flex-center">
            <span class="text-white">Quick Menu</span>
        </h4>
        <br>
    </div>
@else
    <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url('{{ asset('media/misc/bg-1.jpg') }}')">
        {{-- Title --}}
        <h4 class="d-flex flex-center rounded-top">
            <span class="text-white">Quick Menu</span>
        </h4>
        <br>
    </div>
@endif

{{-- Content --}}
<div class="tab-content">
    {{-- Tabpane --}}
    <div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
        {{-- Scroll --}}
{{--        <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="200" data-mobile-height="200">--}}
        <div class="scroll pr-7 mr-n7" data-scroll="true" data-mobile-height="200">
            {{-- Item --}}
            <div class="d-flex align-items-center mb-6">
                {{-- Symbol --}}
                <div class="symbol symbol-40 symbol-light-secondary mr-5">
                    <span class="symbol-label">
                        {{ Metronic::getSVG("media/svg/icons/Home/Library.svg", "svg-icon-lg svg-icon-secondary") }}
                    </span>
                </div>

                {{-- Text --}}
                <div class="d-flex flex-column font-weight-bold">
                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Profile</a>
                    <span class="text-muted">View your profile</span>
                </div>
            </div>

            {{-- Item --}}
            <div class="d-flex align-items-center mb-6">
                {{-- Symbol --}}
                <div class="symbol symbol-40 symbol-light-secondary mr-5">
                    <span class="symbol-label">
                        {{ Metronic::getSVG("media/svg/icons/Home/Library.svg", "svg-icon-lg svg-icon-secondary") }}
                    </span>
                </div>

                {{-- Text --}}
                <div class="d-flex flex-column font-weight-bold">
                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Logout</a>
                    <span class="text-muted">Logout from the system</span>
                </div>
            </div>

        </div>
    </div>

</div>
