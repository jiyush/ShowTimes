<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/mdb.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    
   
</head>
<body>
    
<header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo">
        <a class="navbar-brand" href="#"><strong><h1>ShowTimes</h1></strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
       {{--  <a aling="right" href="/logout" class="btn btn-info">Logout</a> --}}
    </nav>

    

</header>
<div class="container">
@yield('content')
</div>
<div >
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
              interval: 2000
            });

        });

</script>
</body>
</html>