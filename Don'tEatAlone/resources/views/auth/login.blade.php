@extends('layouts.app')
@section('title')
login
@endsection
@section('content')
<!-- BEGIN LOGIN FORM -->
{!! Form::open(['url'=>'login','class'=>'login-form' ,'method'=>'post']) !!}
<h3 class="form-title">Login to your account</h3>
@if (session('status'))
<div class="alert alert-success">
   {{ session('status') }}
</div>
@endif
@if (session('warning'))
<div class="alert alert-warning">
   {{ session('warning') }}
</div>
@endif
<div class="alert alert-danger display-hide">
   <button class="close" data-close="alert"></button>
   <span> Enter valid email and password. </span>
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
   <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
   <div class="input-icon">
      <i class="fa fa-envelope"></i>
      {!! Form::email('email',old('email'),['class'=>'form-control placeholder-no-fix','placeholder'=>'Email','autocomplete'=>'off']) !!}
      @if ($errors->has('email'))
      <span class="help-block">
      <strong>{{ $errors->first('email') }}</strong>
      </span>
      @endif
   </div>
</div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
   <div class="input-icon">
      <i class="fa fa-lock"></i>
      {!! Form::password('password',['class'=>'form-control placeholder-no-fix','placeholder'=>'Password','autocomplete'=>'off']) !!}
      @if ($errors->has('password'))
      <span class="help-block">
      <strong>{{ $errors->first('password') }}</strong>
      </span>
      @endif
   </div>
</div>
<div class="form-actions">
   {!! Form::checkbox('Remember me',old('password')) !!}
   {!! Form::label('Remember me') !!}
   <span></span>
   {!! Form::submit('Login',['class'=>'btn green pull-right']) !!}
</div>
<div class="login-options">
   <h4>Or login with</h4>
   <ul class="social-icons">
      <li>
         <a class="facebook" data-original-title="facebook" href="{{ url('auth/facebook') }}"> </a>
      </li>
   </ul>
</div>
<div class="forget-password">
   <h4>Forgot your password ?</h4>
   <p> no worries, click
      <a href="{{ url('/password/reset') }}" id="forget-password"> here </a> to reset your password. 
   </p>
</div>
{!! Form::close() !!}
<!-- END LOGIN FORM -->
<div class="create-account">
   <p> Don't have an account yet ?&nbsp;
      <a   href="{{url('/register')}}" id="register-btn"> Create new account </a>
   </p>
</div>
@endsection
@section('footer')
@endsection