{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <form class="form" action="" method="POST">
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
                            <input type="text" name="company_name" class="form-control" placeholder="Enter Company Name"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Person in Charge:</label>
                        <div class="col-lg-6">
                            <input type="email" name="company_pic" class="form-control" placeholder="Enter Person in Charge Name"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Phone:</label>
                        <div class="col-lg-6">
                            <input type="email" name="company_phone" class="form-control" placeholder="Enter Company Phone Number"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Details:</label>
                        <div class="col-lg-6">
                            <textarea class="form-control" name="details" id="exampleTextarea" rows="5" placeholder="Enter purchase order details here..."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Date:</label>
                        <div class="col-lg-6">
                            <div class="input-group date">
                                <input type="text" name="date" class="form-control"  placeholder="Select date"/>
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
                            <select name="payment_method" class="form-control" id="exampleSelect1">
                                <option selected disabled>-Select Payment Type-</option>
                                <option>Online Transfer</option>
                                <option>Cheque</option>
                                <option>Cash</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Bank Name:</label>
                        <div class="col-lg-6">
                            <input type="email" name="bank_name" class="form-control" placeholder="Enter Bank Name"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Reference Number:</label>
                        <div class="col-lg-6">
                            <input type="email" name="reference_number" class="form-control" placeholder="Enter Reference Number"/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Amount:</label>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">RM</span></div>
                                <input type="text" name="amount" class="form-control" placeholder="Enter Amount" />
                            </div>
                        </div>
                    </div>
                    </div>

                    <h3 class="font-size-lg text-dark font-weight-bold mb-6">3. Request Details:</h3>
                    <div class="mb-15">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Requester Name:</label>
                            <div class="col-lg-6">
                                <input value="{{Auth::user()->name}}" type="email" name="requester_name" class="form-control" placeholder="Enter Company Name"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Approver Name:</label>
                            <div class="col-lg-6">
                                <select name="approver_name" class="form-control" id="exampleSelect2">
                                    <option selected disabled>-Select Approver-</option>
                                    <option>Online Transfer</option>
                                    <option>Cheque</option>
                                    <option>Cash</option>
                                </select>
                            </div>
                        </div
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
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endsection
