@extends('admin.index')

@section('AdminContent')

<div class="content-wrapper">
	<div class="container-fluid">
		<div class="card-body">
		<form action="{{ url('/admin/movie/update') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $movie->id }}">
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="title" class="control-label">Movie Title</label>
					<input type="text" name="title" value="{{ $movie->title }}" class="form-control">
					
				</div>
				
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="cast" class="control-label">Start cast</label>
					<input type="text" name="cast" value="{{ $movie->cast }}" class="form-control">
					
				</div>
				
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="dir" class="control-label">director</label>
					<input type="text" name="dir"  value="{{ $movie->dir }}" class="form-control">
					
				</div>
				
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="release" class="control-label">Release Date</label>
					<input type="date" name="release"  value="{{ $movie->release }}" class="form-control">
					
				</div>
				
			</div>
			<div class="form-row">
				
				<div class="form-group col-md-6">
					<label for="hour" class="control-label">Runtime</label>
					<select class="custom-select col-md-3" name="hour" >
                        
                      <!-- <select class="custom-select" style="width: 100% !important" required> -->
                        <option value=""  disabled>Select Hour</option>
                        <option value="1">1</option>
                        <option value="2" selected>2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                      <select class="custom-select col-md-3" name="minut">
                      		<option value="" disabled> Select Minut</option>
                      		<option value="1">1</option>
                      		<option value="2">2</option>
                      		<option value="3">3</option>
                      		<option value="4">4</option>
                      		<option value="5">5</option>
                      		<option value="6">6</option>
                      		<option value="7">7</option>
                      		<option value="8">8</option>
                      		<option value="9">9</option>
                      		<option value="10" selected>10</option>
                      </select>
				</div>
				
				
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="control-label" for="language">Language</label>
					<select class="custom-select col-md-3" name="language">
						<option value=""  disabled>Select Language</option>
						<option value="Hindi">Hindi</option>
						<option value="English" selected >English</option>
						
					</select>
				</div>
				
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="tailer_link" class="control-label">Tailer Link</label>
					<input type="text" name="tailer_link"  value="{{ $movie->tailer_link }}" class="form-control">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="control-label" for="poster">Movie Poster</label>
					<div class="custom-file">
						 <label class="custom-file-label" for="customFile">Choose file</label>
					  <input type="file" value="{{ $movie->poster }}"  name="poster">
					 
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="control-label" for="satus">Satus</label>
					<select class="custom-select col-md-3" name="satus">
						<option value=""  disabled>Select Satus</option>
						<option value="Now" selected>Now</option>
						<option value="Upcoming" >Upcoming</option>
						
					</select>
				</div>
			</div>
			<button type="submit" class="btn btn-info">Submit</button>
		</form>
		</div>
	</div>
</div>

@endsection()