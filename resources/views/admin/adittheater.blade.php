@extends('admin.index')

@section('AdminContent')

<div class="content-wrapper">
	<div class="container-fluid">
		<div class="card-body">
		<form action="{{ url('/admin/theater/update') }}" method="POST" class="form-horizontal" >
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $theater->id }}">
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="name" class="control-label">Theater Name</label>
					<input type="text" value="{{ $theater->name }}" name="name" class="form-control">
					
				</div>
				
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="location" class="control-label">Location</label>
					<input type="text" value="{{ $theater->location }}" name="location" class="form-control">
					
				</div>
				
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="owner" class="control-label">Theater Owner</label>
					<input type="text" value="{{ $theater->owner }}" name="owner" class="form-control">
					
				</div>
				
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="contact" class="control-label">Contact Number</label>
					<input type="number" value="{{ $theater->contact }}" name="contact" class="form-control">
					
				</div>
				
			</div>
				<button type="submit" class="btn btn-info">Submit</button>
		</form>
		</div>
	</div>
</div>

@endsection()