@extends('layouts.default')

@section('styles')
     <link href="/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
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

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Fill project information</b></h4>
                <p class="text-muted m-b-30 font-13">
                    Record information for how to fill this form!
                </p>
                <div class="row">
                    
                   {!! Form::model($project, [
					    'route' => $project->exists() ?['projects.update', $project->id]:['projects.store'],
					    'method' => $project->exists() ? 'put':'post',
					    'class' => 'form-horizontal'
					    ]) !!}

					<div class="row">
					    <div class="col-md-4">
					        <div class="form-group">
					            {!! Form::label('ori_num', 'Origin Number', [
					                'class' => 'col-md-2 control-label'
					            ]) !!}
					            <div class="col-md-10">
					                {!! Form::text('ori_num', null, [
					                    'class' => 'form-control',
					                    'id' => 'ori_num'
					                ]) !!}
					            </div>
					        </div>
					    </div>
					    <div class="col-md-4">
					    	<input class="form-control input-daterange-datepicker" type="text" name="daterange"/>
					    </div>
				    </div>
			    <div class="col-md-4 col-md-offset-4">

				    {!! Form::submit($project->exists() ?'Update':'Store', ['class' => 'btn btn-default']) !!}
				</div>


				{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
<script src="/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
@stop

@push('js')
<script type="text/javascript">
	$(document).ready(function() {
		$('.input-daterange-datepicker').daterangepicker({
	        buttonClasses: ['btn', 'btn-sm'],
	        applyClass: 'btn-success',
	        cancelClass: 'btn-default'
	    });
	});
</script>
@endpush




