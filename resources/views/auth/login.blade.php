@extends('main')

@section('content')

<style type="text/css">
	.form-simple .header {
  border-top-left-radius: .3rem;
  border-top-right-radius: .3rem; }

.form-simple input[type=text]:focus:not([readonly]) {
  border-bottom: 1px solid #ff3547;
  -webkit-box-shadow: 0 1px 0 0 #ff3547;
  box-shadow: 0 1px 0 0 #ff3547; }

.form-simple input[type=text]:focus:not([readonly]) + label {
  color: #4f4f4f; }

.form-simple input[type=password]:focus:not([readonly]) {
  border-bottom: 1px solid #ff3547;
  -webkit-box-shadow: 0 1px 0 0 #ff3547;
  box-shadow: 0 1px 0 0 #ff3547; }

.form-simple input[type=password]:focus:not([readonly]) + label {
  color: #4f4f4f; }
</style>
<section class="form-simple" style="margin-top: 100px;">

    <!--Form with header-->
    <div class="card">
    	 <form method="POST" action="{{ route('login') }}">
        <!--Header-->
         {{ csrf_field() }}
        <div class="header pt-3 grey lighten-2">

            <div class="row d-flex justify-content-start">
                <h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">Log in to Showtimes</h3>
            </div>

        </div>
        <!--Header-->

        <div class="card-body mx-4 mt-4">

            <!--Body-->
            <div class="md-form">
                <input type="email" id="email" name="email" class="form-control">
                <label for="Form-email4">Your email</label>
            </div>

            <div class="md-form pb-3">
                <input type="password" id="password" name="password" class="form-control">
                <label for="Form-pass4">Your password</label>
                <p class="font-small grey-text d-flex justify-content-end">Forgot <a href="{{ route('password.request') }}" class="dark-grey-text font-weight-bold ml-1"> Password?</a></p>
            </div>

            <div class="text-center mb-4">
                <button type="submit" class="btn btn-info btn-block z-depth-2">Log in</button>
            </div>
            <p class="font-small grey-text d-flex justify-content-center">Don't have an account? <a href="#" class="dark-grey-text font-weight-bold ml-1"> Sign up</a></p>

        </div>
    </form>
    </div>
    <!--/Form with header-->

</section>
@endsection