@extends('layouts.default')


@section('content')

	<div class="row">
		<div class="colo-xs-12">
		<div class="page-title-box">
			<h4 class="page-title">所有项目</h4>
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

		<div class="colo-xs-12">
			
			<div class="card-box">
				<div class="row">
					<div class="col-dm-6">
						<div class="m-b-30">
							<a href="{{ route('projects.create')}}">
								<button class="btn btn-success waves-effect waves-light">
									新建项目
									<i class="mdi mdi-plus-circle-outline"></i>
								</button>
							</a>
						</div>
					</div>
				</div>

				<h4 class="m-t-0 header-title"><b>所有项目信息</b></h4>
				<p class="text-muted font-13">
					操作说明
				</p>

				<table class="tablesaw table m-b-0" data-tablesaw-mode="columntoggle">
					<thead>
						<tr>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">编号</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">名称</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">负责人</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">开始日期</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">结束日期</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">查看</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">编辑</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">删除</th>
						</tr>
					</thead>

					<tbody>
						@foreach($projects as $project)
							<tr>
								<td>
									{{ $project->id }}
								</td>
								<td>
									{{ $project->name }}
								</td>
								<td>
									{{ $project->manager_user_id }}
								</td>
								<td>
									{{ $project->start}}
								</td>
								<td>
									{{ $project->end}}
								</td>
								<td scope="col">
									<a href="{{ route('projects.show', $project->id) }}"><button class="btn btn-sm btn-primary">Samples <i class="mdi mdi-pen"></i></button></a>
								</td>
								<td scope="col">
									<a href="{{ route('projects.edit', $project->id) }}"><button class="btn btn-sm btn-default">Edit <i class="mdi mdi-pen"></i></button></a>
								</td>
								<td scope="col">
									<a href="{{ route('projects.destroy', $project->id) }}"><button class="btn btn-sm btn-danger">Delete <i class="mdi mdi-delete"></i></button></a>
								</td>
							</tr>
							@endforeach
					</tbody>	
				</table>

				{{ $projects->links() }}
			</div>
		</div>
		</div>
	</div>

@stop