{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <form class="form" action="{{route('po-store')}}" method="POST">
        @csrf
        <div class="card card-custom shadow-lg">
            <div class="card-header border-secondary">
                <div class="col pull-left">
                    <div class="mt-2">
                        <img alt="" src="{{ asset('media/ternary-logo-small.png') }}"/>
                    </div>
                    {{--                    <img src="{{ asset('media/logos/logo-login.png') }}"/>--}}
                </div>
                <div class="col-lg-auto">
                    <div class="card-title mt-8">
                        <h3 class="card-label">
                            Purchase Order Form
                        </h3>
                    </div>
                </div>


                <div class="col no-gutters">
                </div>
            </div>
            <div class="card-body">
                <div class="mb-15">
                <div class="alert alert-custom alert-default" role="alert">
                    <div class="alert-icon"><i class="flaticon-information text-primary"></i></div>
                    <div class="alert-text">
                        Please fill-up the form details and click submit button to proceed with your purchase order request.
                    </div>
                </div>
                </div>

                <h3 class="font-size-lg text-dark font-weight-bold mb-6">1. Order Details:</h3>
                <div class="mb-15">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Company Name:</label>
                        <div class="col-lg-6">
                            <input type="text" name="company_name" class="form-control @error('company_name') is-invalid @enderror" placeholder="Enter Company Name" required/>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Person in Charge:</label>
                        <div class="col-lg-6">
                            <input type="text" name="company_pic" class="form-control @error('company_pic') is-invalid @enderror" placeholder="Enter Person in Charge Name" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">E-Mail:</label>
                        <div class="col-lg-6">
                            <input type="email" name="company_email" class="form-control @error('company_email') is-invalid @enderror" placeholder="Enter Company E-Mail" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Phone:</label>
                        <div class="col-lg-6">
                            <input type="text" name="company_phone" class="form-control @error('company_phone') is-invalid @enderror" placeholder="Enter Company Phone Number" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Details:</label>
                        <div class="col-lg-6">
                            <div id="kt_quil_1" style="height: 325px">

                            </div>
                            <input type="text" id="details" name="details" class="form-control"  hidden/>
                            @error('details')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Date:</label>
                        <div class="col-lg-6">
                            <div class="input-group date">
                                <input type="text" id="kt_datepicker_2" type="text" name="date" class="form-control @error('date') is-invalid @enderror" readonly placeholder="Select date" required/>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="input-group-append">
                                        <span class="input-group-text">
                                         <i class="la la-calendar-check-o"></i>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="font-size-lg text-dark font-weight-bold mb-6">2. Payment Details:</h3>
                <div class="mb-15">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Payment Method:</label>
                        <div class="col-lg-6">
                            <select type="text" name="payment_method" class="form-control @error('payment_method') is-invalid @enderror" id="exampleSelect1" required>
                                <option selected disabled>-Select Payment Type-</option>
                                <option>Online Transfer</option>
                                <option>Cheque</option>
                                <option>Cash</option>
                            </select>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Bank Name:</label>
                        <div class="col-lg-6">
                            <input type="text" name="bank_name" class="form-control @error('bank_name') is-invalid @enderror" placeholder="Enter Bank Name" required/>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Reference Number:</label>
                        <div class="col-lg-6">
                            <input type="text" name="reference_number" class="form-control @error('reference_number') is-invalid @enderror" placeholder="Enter Reference Number" required/>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Amount:</label>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">RM</span></div>
                                <input type="number" name="amount" step="0.01" placeholder="0.00" class="form-control @error('amount') is-invalid @enderror" required/>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    </div>

                    <h3 class="font-size-lg text-dark font-weight-bold mb-6">3. Request Details:</h3>
                    <div class="mb-15">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Requester Name:</label>
                            <div class="col-lg-6">
                                <input value="{{Auth::user()->name}}" type="text" name="requester_name" class="form-control @error('requester_name') is-invalid @enderror" placeholder="Enter Company Name" readonly required/>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Approver Name:</label>
                            <div class="col-lg-6">
                                <select type="text" name="approver_name" class="form-control @error('approver_name') is-invalid @enderror" id="exampleSelect2" required>
                                    <option selected disabled>-Select Approver-</option>
                                    <option>Online Transfer</option>
                                    <option>Cheque</option>
                                    <option>Cash</option>
                                </select>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>


            </div>

            <div class="card-footer d-flex justify-content-between border-secondary">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>

            </div>
        </div>
    </form>


@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script>
        // Class definition
        var KTBootstrapDatepicker = function () {

            var arrows;
            if (KTUtil.isRTL()) {
                arrows = {
                    leftArrow: '<i class="la la-angle-right"></i>',
                    rightArrow: '<i class="la la-angle-left"></i>'
                }
            } else {
                arrows = {
                    leftArrow: '<i class="la la-angle-left"></i>',
                    rightArrow: '<i class="la la-angle-right"></i>'
                }
            }

            // Private functions
            var demos = function () {
                // input group layout
                $('#kt_datepicker_2').datepicker({
                    rtl: KTUtil.isRTL(),
                    todayHighlight: true,
                    orientation: "bottom left",
                    templates: arrows
                });
            }
            return {
                // public functions
                init: function() {
                    demos();
                }
            };
        }();

        // Class definition
        var KTQuilDemos = function() {
            // Private functions
            var demo1 = function() {
                var quill = new Quill('#kt_quil_1', {
                    modules: {
                        toolbar: [
                            [{
                                header: [1, 2, false]
                            }],
                            ['bold', 'italic', 'underline'],
                            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                        ]
                    },
                    placeholder: 'Enter purchase order details here...',
                    theme: 'snow' // or 'bubble'
                });
            }
            return {
                // public functions
                init: function() {
                    demo1();
                }
            };
        }();

        $(document).ready(function() {
            $('.select2').select2();
            KTQuilDemos.init();
            KTBootstrapDatepicker.init();

            var form = document.querySelector('form');
            form.onsubmit = function() {
                // Populate hidden form on submit
                var details = document.querySelector('input[name=details]');
                details.value = JSON.stringify(quill.getContents());

                console.log("Submitted", $(form).serialize(), $(form).serializeArray());

                // No back end to actually submit to!
                alert('Open the console to see the submit data!')
                return false;
            };

        });
    </script>
@endsection
