@extends('layouts.default')

@section('styles')
	<!-- Tablesaw css -->
	<link href="/plugins/tablesaw/css/tablesaw.css" rel="stylesheet" type="text/css" />
@stop

@section('content')

	<div class="container">

		<div class="row">
			<div class="col-xs-12">
				<div class="page-title-box">
					<h4 class="page-title">Dashboard</h4>
					<ol class="breadcrumb p-0 m-0">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li class="active">
							Index
						</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="col-xs-12">

					<div class="card-box">
						<div class="row">
							<div class="col-sm-6">
								<div class="m-b-30">
									<a href="{{ route('batches.create') }}"></a><button class="btn btn-success waves-effect waves-light">New Batch<i class="mdi mdi-plus-circle-outline"></i></button>
								</div>
							</div>
						</div>

						<h4 class="m-t-0 header-title"><b>Column Toggle Table</b></h4>
						<p class="text-muted font-13">
							The Column Toggle Table allows the user to select which columns they want to be visible.
						</p>

						<table class="tablesaw table m-b-0" data-tablesaw-mode="columntoggle">
							<thead>
							<tr>
								<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Sender</th>
								<th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Sample Type</th>
								<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Year</th>
								<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Rating</th>
								<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Gross</th>
							</tr>
							</thead>
							<tbody>
							@foreach($batches as $batch)
							<tr>
								<td>{{ $batch->sender }}</td>
								<td>{{ $batch->sample_type }}</td>
								<td>{{ $batch->trans_method }}</td>
								<td>{{ $batch->store_method }}</td>
								<td>{{ $batch->manager }}</td>
							</tr>
								@endforeach

							</tbody>
						</table>

							{{ $batches->render() }}
					</div>
			</div>
		</div>
	</div>

@stop

@section('scripts')
	<!-- Tablesaw js -->
		<script src="/plugins/tablesaw/js/tablesaw.js"></script>
		<script src="/plugins/tablesaw/js/tablesaw-init.js"></script>

@stop
