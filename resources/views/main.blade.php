<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/mdb.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    
    {{-- <script type="text/javascript" src="./js/popper.js"></script> --}}
</head>
<body>
<header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo">
        <a class="navbar-brand" href="#"><strong><h1>ShowTimes</h1></strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                

            </ul>
        </div>
        <ul class="navbar-nav ml-auto">
        @guest
        <a aling="right" href="/login" class="btn btn-info">Login</a>
        @else
            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
    </nav>

    <div class="view intro-2">
        <div class="full-bg-img">
            <div class="mask rgba-black-light flex-center">
                <div class="container text-center white-text">
                    <div class="white-text text-center wow fadeInUp">
                        <h2>This Navbar is fixed</h2>
                        <h5>It will always stay visible on the top, even when you scroll down</h5>
                        <br>
                        <p>Full page intro with background image will be always displayed in full screen mode, regardless of device </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<div class="container">
@yield('content')
</div>
<div >
<footer class="page-footer font-small stylish-color-dark pt-4 mt-4 align-bottom" style="margin-bottom: -20px;bottom: 0;">

    

    

   

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright:
        <a href="https://mdbootstrap.com/material-design-for-bootstrap/"> ShowTimes </a>
    </div>
    <!--/.Copyright-->

</footer>
</div>
<script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="./js/bootstrap.js"></script>
<script type="text/javascript" src="./js/mdb.js"></script>
    <script type="text/javascript">
        $(document).ready(function (){

            $('.carousel').carousel({
              interval: 2000
            });

        });

</script>
</body>
</html>