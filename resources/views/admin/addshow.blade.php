@extends('admin.index')

@section('AdminContent')

<div class="content-wrapper">
	<div class="container-fluid">
		<div class="card-body">
		<form action="{{ url('/admin/show/insert') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="control-label" for="movie">Movie</label>
					<select class="custom-select col-md-3" name="movie" required>
						<option value="" selected disabled>Select Movie</option>
						@foreach($movie as $m)
						<option value="{{ $m->title }}" >{{ $m->title }}</option>
						@endforeach

						
					</select>
				</div>
				
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="control-label" for="showtime">showtime</label>
					<select class="custom-select col-md-3" name="showtime" required>
						<option value="" selected disabled>Select Movie</option>
						<option value="10:30 AM" >10:30 AM</option>
						<option value="02:30 PM">02:30 PM</option>
						<option value="06:30 PM" >06:30 PM</option>
						
						
					</select>
				</div>
				
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="control-label" for="theater">Theater</label>
					<select class="custom-select col-md-3" name="theater" required>
						<option value="" selected disabled>Select Theater</option>
						@foreach($theater as $th)
						<option value="{{ $th->name }}"> {{ $th->name }}</option>
						@endforeach

						
					</select>
				</div>
				
			</div>
			
			
			
			<button type="submit" class="btn btn-info">Submit</button>
		</form>
		</div>
	</div>
</div>

@endsection()