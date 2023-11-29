@extends('admin.header')

@section('content')

@php
    $products = \App\Models\Product::count();
    $enquiries = \App\Models\Index::count();
    $openings = \App\Models\Openings::count();
@endphp

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-4 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                    <div class="card-body">
                            <span class="fw-semibold d-block mb-1">Total Products</span>
                            <h3 class="card-title mb-2">{{ $products??'' }}</h3>                    
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                    <div class="card-body">
                            <span class="fw-semibold d-block mb-1">Total Enquiries</span>
                            <h3 class="card-title mb-2">{{ $enquiries??'' }}</h3>                    
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                    <div class="card-body">
                            <span class="fw-semibold d-block mb-1">Total Openings</span>
                            <h3 class="card-title mb-2">{{ $openings??'' }}</h3>                    
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>     
    </div>
</div>
<!-- / Content -->


@endsection
@section('scripts')
@parent

<script type="text/javascript">
$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    cb(start, end);
    
});
</script>

@endsection


