@extends('main')

@section('content')
 <div class="carousel carousel-inner" role="listbox" style="margin-top: 100px;">
        <!--First slide-->
        <div class="carousel-item active">
            <img class="d-block w-100" src="./slide/raid.jpg" alt="First slide">
        </div>
        <!--/First slide-->
        <!--Second slide-->
        
        <!--/Second slide-->
        <!--Third slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="./slide/e.jpg" alt="Third slide">
        </div>
        <!--/Third slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="./slide/d.jpg" alt="Third slide">
        </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<div class="container" style="margin-top: 20px;">
    <div class="card">
      <div class="card-header">
        <dir>
            <strong>Now Showing</strong>
        </dir>
        
      </div>  
      <div class="card-body">
          <!--Card group-->
            <div class="card-deck">
                @foreach($now as $n)
                <!--Card-->
                <div class="card mb-4">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="img-fluid" src="./poster/{{ $n->poster }}" alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">{{ $n->title }}</h4>

                        <!--Text-->
                        <p class="card-text">Start cast: {{ $n->cast }}</p>
                        <p class="card-text"> Director: {{ $n->dir }}</p>

                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <a href="/user/{{ $n->id }}" class="btn btn-light-blue btn-md">Book</a>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
                @endforeach

                

                

            </div>
            <!--Card group-->
</div>
    
</div>


@endsection()