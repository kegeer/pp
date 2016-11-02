@extends('layouts.default')


@section('content')

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
									<a href="{{ route('batches.create') }}"><button class="btn btn-success waves-effect waves-light">New Batch<i class="mdi mdi-plus-circle-outline"></i></button></a>
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
								<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Samples</th>
								<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Edit</th>
								<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Delete</th>

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
								<td scope="col">
									<a href="{{ route('samples.index', $batch->id) }}"><button class="btn btn-sm btn-primary">Samples <i class="mdi mdi-pen"></i></button></a>
								</td>
								<td scope="col">
									<a href="{{ route('batches.edit', $batch->id) }}"><button class="btn btn-sm btn-default">Edit <i class="mdi mdi-pen"></i></button></a>
								</td>
								<td scope="col">
									<a href="{{ route('batches.destroy', $batch->id) }}"><button class="btn btn-sm btn-danger">Delete <i class="mdi mdi-delete"></i></button></a>
								</td>
							</tr>
								@endforeach

							</tbody>
						</table>

							{{ $batches->links() }}
					</div>
			</div>
		</div>

@stop

