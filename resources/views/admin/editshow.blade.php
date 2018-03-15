@extends('admin.index')

@section('AdminContent')

<div class="content-wrapper">
	<div class="container-fluid">
		<div class="card-body">
		<form action="{{ url('/admin/show/update') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $data->id }}">
			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="control-label" for="movie">Movie</label>
					<select class="custom-select col-md-3" name="movie" required>
						<option value=""  disabled>Select Movie</option>
						@foreach($movie as $m)
							@if($m == $data->movie)
								<option value="{{ $data->movie }}" selected>{{ $data->movie }}</option>
							@else
								<option value="{{ $m->title }}" >{{ $m->title }}</option>
							@endif
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
						<option value="02:30 PM" selected>02:30 PM</option>
						<option value="06:30 PM" >06:30 PM</option>
						
						
					</select>
				</div>
				
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="control-label" for="theater">Theater</label>
					<select class="custom-select col-md-3" name="theater" required>
						<option value=""  disabled>Select Theater</option>
						@foreach($theater as $th)
							@if($th == $data->theater)
								<option value="{{ $data->theater }}" selected>{{ $data->theater }}</option>
							@else
								<option value="{{ $th->name }}"> {{ $th->name }}</option>
							@endif
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