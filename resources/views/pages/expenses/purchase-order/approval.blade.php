{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

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
                        Purchase Order Request List
                    </h3>
                </div>
            </div>


            <div class="col no-gutters">
            </div>
        </div>
        <div class="card-body">


            <table class="table table-bordered table-hover" id="po_approval_datatable">
                <thead class="bg-light-primary">
                <tr>
                    <th width="5%">#</th>
                    <th>id</th>
                    <th>Company Name</th>
                    <th>Details</th>
                    <th>Date</th>
                    <th>Payment Method</th>
                    <th>Requester Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>



        </div>

{{--        <div class="card-footer d-flex justify-content-between border-secondary">--}}
{{--            <button type="reset" class="btn btn-secondary">Reset</button>--}}
{{--            <button type="submit" class="btn btn-primary mr-2">Submit</button>--}}

{{--        </div>--}}
    </div>



@endsection

{{-- Styles Section --}}
@section('styles')
    <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
@endsection

{{-- Scripts Section --}}
@section('scripts')
    {{-- vendors --}}
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>

    <script>
        $(document).ready(function() {

            var decHTMLifEnc = function(str){
                if(isEncHTML(str))
                    return str.replace(/&amp;/g, '&').replace(/&lt;/g, '<').replace(/&gt;/g, '>');
                return str;
            }
            var isEncHTML = function(str) {
                if(str.search(/&amp;/g) != -1 || str.search(/&lt;/g) != -1 || str.search(/&gt;/g) != -1)
                    return true;
                else
                    return false;
            };

            var table = $('#po_approval_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('po-approval') }}",
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'id',
                        name: 'id',
                        visible: false
                    },
                    {
                        data: 'company_name',
                        name: 'company_name'
                    },
                    {
                        render: function ( data ) {
                            console.log(data);
                            return decHTMLifEnc(data);
                        },
                        data: 'details',
                        name: 'details'
                    },
                    {
                        render: function ( data ) {
                            return moment(data,"YYYY-MM-DD").format("DD/MM/YYYY")
                        },
                        data: 'date',
                        name: 'date'
                    },                    {
                        data: 'payment_method',
                        name: 'payment_method'
                    },
                    {
                        data: 'requester_name',
                        name: 'requester_name'
                    },
                    {
                        render: function ( data ) {
                            switch(data) {
                                case 1:
                                    return '<span class="label shadow-xs label-light-success border-white label-pill label-inline">Approved</span>';
                                    break;
                                default:
                                    return '<span class="label shadow-xs label-light-info border-white label-pill label-inline">Pending Approval</span>';
                            }
                        },
                        data: 'approval_status',
                        name: 'approval_status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });

        });
    </script>
@endsection
