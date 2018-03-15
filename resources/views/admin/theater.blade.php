@extends('admin.index')

@section('AdminContent')
<div class="content-wrapper">
	<div class="container-fluid">
		<div class="row">
        	<div class="col-lg-12">
            	<div class="card mb-3">
                	<div class="card-header">
               			<i class="fa fa-video"></i>
               	 			<strong> Theater Management </strong>
               	
               					<a href="{{ url('admin/theater/add') }}" class="btn btn-info" style="float: right;">Add Theater
               					</a>
	           		</div>
	           		<div class="card-body">
	           		<table class="table table-bordered" width="100%">
	           			<thead>
	           				<tr>
	           					<th>Theater Name</th>
	           					<th>Location</th>
	           					<th>Theater Owner</th>
	           					<th>Contact Number</th>
	           					<th colspan="2">Action</th>
	           				</tr>
	           			</thead>
	           			<tbody>
	           				@foreach($theater as $th)
	           				<tr>
	           					<td>{{ $th->name }}</td>
	           					<td>{{ $th->location }}</td>
	           					<td>{{ $th->owner }} </td>
	           					<td>{{ $th->contact }}</td>
	           					<td><a  href="/admin/theater/edit/{{ $th->id }}" class="btn btn-info">Edit</a></td>
	           					<td>
		           						<form action="{{ url('admin/theater/delete') }}" method="POST">
		           						{{ csrf_field() }}
		           						<input type="hidden" value="{{ $th->id }}" name="id">
		           						<button type="submit" class="btn btn-danger">Delete</button>
		           					</form>
	           					</td>
	           				</tr>
	           				@endforeach
	           			</tbody>
	           			
	           		</table>
	           	
	           		</div>
	           	</div>
	        </div>
	     </div>
	 </div>
</div>


@endsection