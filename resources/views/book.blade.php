@extends('main')

@section('content')
<div class="container" style="margin-top: 100px;">
	
	<!--Card-->

	<div>
	    <table>
	    	<tr>
	    		<td>
	    			<!--Panel-->
						<div class="card w-80" >
						    <div class="card-body" style="width:450px;height: 275px;">
						        <h1 class="card-title">{{ $movie->title }}</h1>
						        <p class="card-text"><h4>Star Cast:  {{ $movie->cast }}
						        	</h4>
						        </p>
						        <p><h4>Director: {{ $movie->dir }}</h4></p>
						        
						    </div>
						</div>
						<!--/.Panel-->
	    			
	    		</td>
	    		<td>
	    			<iframe width="550" height="275" src="{{ $movie->tailer_link }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
	    	
	   				 </iframe>
	    				
	    		</td>
	    	</tr>
	    </table>
	  </div>
	<center>
	    <!--Pagination-->
	<nav aria-label="pagination example" style="margin-left: 350px;margin-top: 20px;">
	    <ul class="pagination pagination-lg">

	        <!--Arrow left-->
	        <li class="page-item">
	            <a class="page-link" href="#" aria-label="Previous">
	                <span aria-hidden="true">&laquo;</span>
	                <span class="sr-only">Previous</span>
	            </a>
	        </li>

	        <!--Numbers-->
	        <li class="page-item"><a class="page-link active	" href="#">Sun 30</a></li>
	        <li class="page-item"><a class="page-link" href="#">Mon 1</a></li>
	        <li class="page-item"><a class="page-link" href="#">Tue  2</a></li>
	        
	        <!--Arrow right-->
	        <li class="page-item">
	            <a class="page-link" href="#" aria-label="Next">
	                <span aria-hidden="true">&raquo;</span>
	                <span class="sr-only">Next</span>
	            </a>
	        </li>
	    </ul>
	</nav>
	</center>
	<dir style="margin-bottom: 80px;">
	<ul class="list-group">
		@foreach($th as $t)	
	  		<li class="list-group-item">
	  			<center>
	  				{{ $t->theater }} 
	  				<a href="#">{{ $t->showtime }}</a>

	  			</center> </li>
	  	@endforeach
	</ul>
	</dir>
  
                	
	
</div>




@endsection