@extends('admin.index')

@section('AdminContent')
<div class="content-wrapper">
	<div class="container-fluid">
		<div class="row">
           <div class="col-lg-12">
             <div class="card mb-3">
               <div class="card-header">
               	<i class="fa fa-video"></i>
               	 <strong> Movie Management </strong>
               	{{-- <button class="btn btn-info" style=" float: right;" >Add Movie</button> --}}
               	<a href="{{ url('admin/movie/add') }}" class="btn btn-info" style="float: right;">Add Movie</a>
	           </div>
	           <div class="card-body">
	           		<table class="table table-bordered" width="100%">
	           			<thead>
	           				<tr>
	           					<th>Movie Title</th>
	           					<th>Release Date</th>
	           					<th>Run Time</th>
	           					<th colspan="2">Action</th>
	           				</tr>
	           			</thead>
	           			<tbody>
	           				@foreach($movies as $movie)
	           				<tr>
	           					<td>{{ $movie->title }}</td>
	           					<td>{{ $movie->release }}</td>
	           					<td>{{ $movie->hour }} : {{ $movie->minut }}</td>
	           					<td><a  href="{{ url('/admin/movie/update/$movie->id') }}" class="btn btn-info">update</a></td>
	           					<td><button class="btn btn-danger">Delete</button></td>
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