<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/mdb.css">
    <link rel="stylesheet" type="text/css" href="./css/mdb.css">
    
    {{-- <script type="text/javascript" src="./js/popper.js"></script> --}}
</head>
<body>
<header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo">
        <a class="navbar-brand" href="#"><strong>ShowTimes</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                {{-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li> --}}

            </ul>
        </div>
        <a aling="right" href="/login" class="btn btn-info">Login</a>
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
<div style="margin-bottom: 20px;">
<footer class="page-footer font-small stylish-color-dark pt-4 mt-4 align-bottom" style="margin-bottom: -20px;">

    

    

   

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
              interval: 3000
            });

        });

</script>
</body>
</html>