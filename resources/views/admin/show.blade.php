@extends('admin.index')

@section('AdminContent')
<div class="content-wrapper">
	<div class="container-fluid">
		<div class="row">
           <div class="col-lg-12">
             <div class="card mb-3">
               <div class="card-header">
               	<i class="fa fa-video"></i>
               	 <strong> Show Management </strong>
               	{{-- <button class="btn btn-info" style=" float: right;" >Add Movie</button> --}}
               	<a href="{{ url('admin/show/add') }}" class="btn btn-info" style="float: right;">Add Show</a>
	           </div>
	           <div class="card-body">
	           		<table class="table table-bordered" width="100%">
	           			<thead>
	           				<tr>
	           					<th>Movie</th>
	           					<th>Show Time</th>
	           					<th>Theater</th>
	           					<th colspan="2">Action</th>
	           				</tr>
	           			</thead>
	           			<tbody>
	           				@foreach($show as $s)
	           				<tr>
	           					<td>{{ $s->movie }}</td>
	           					<td>{{ $s->showtime }}</td>
	           					<td>{{ $s->theater }}</td>
	           					<td><a  href="/admin/show/edit/{{ $s->id }}" class="btn btn-info">Edit</a></td>
	           					<td>
		           						<form action="{{ url('admin/show/delete') }}" method="POST">
		           						{{ csrf_field() }}
		           						<input type="hidden" value="{{ $s->id }}" name="id">
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
@endsection()