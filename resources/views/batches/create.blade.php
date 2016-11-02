@extends('layouts.default')

@section('styles')
        <link href="/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

@stop
@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Form elements </h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">Zircos</a>
                    </li>
                    <li>
                        <a href="#">Forms </a>
                    </li>
                    <li class="active">
                        Form elements
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Fill Batch information</b></h4>
                <p class="text-muted m-b-30 font-13">
                    Record information for how to fill this form!
                </p>
                <div class="row">
                    
                    @include('batches.form')
                    </div>
            </div>
        </div>
    </div>

@stop

@section('scripts')
    <script src="/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

@stop

@push('js')

<script type="text/javascript">
    jQuery(document).ready(function() {

        jQuery('#send_time').datepicker();
        jQuery('#arrive_time').datepicker();
        
    });
</script>

@endpush