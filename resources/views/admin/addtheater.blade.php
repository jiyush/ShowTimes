@extends('admin.index')

@section('AdminContent')

<div class="content-wrapper">
	<div class="container-fluid">
		<div class="card-body">
		<form action="{{ url('/admin/theater/insert') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="name" class="control-label">Theater Name</label>
					<input type="text" name="name" class="form-control">
					
				</div>
				
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="location" class="control-label">Location</label>
					<input type="text" name="location" class="form-control">
					
				</div>
				
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="owner" class="control-label">Theater Owner</label>
					<input type="text" name="owner" class="form-control">
					
				</div>
				
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="contact" class="control-label">Contact Number</label>
					<input type="number" name="contact" class="form-control">
					
				</div>
				
			</div>
				<button type="submit" class="btn btn-info">Submit</button>
		</form>
		</div>
	</div>
</div>

@endsection()