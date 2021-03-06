@extends('layouts.app')
@section('title')
register
@endsection
@section('content')
<!-- BEGIN REGISTRATION FORM -->
{!! Form::open(['url'=>'register' ,'class'=>'login-form' ,'method'=>'post']) !!}
<h3>Sign Up</h3>
<p> Enter your personal details below: </p>
<div class="alert alert-danger display-hide">
   <button class="close" data-close="alert"></button>
   <span> Enter valid information . </span>
</div>
<div class="form-group{{ $errors->has('UserName') ? ' has-error' : '' }}">
   <div class="input-icon">
      <i class="fa fa-font"></i>
      {!! Form::text('UserName',old('UserName'),['class'=>'form-control placeholder-no-fix','placeholder'=>'User Name']) !!}
      @if ($errors->has('UserName'))
      <span class="help-block">
      <strong>{{ $errors->first('UserName') }}</strong>
      </span>
      @endif
   </div>
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
      {!! Form::password('password',['class'=>'form-control placeholder-no-fix', 'id'=>'password' ,'placeholder'=>'Password','autocomplete'=>'off']) !!}
      @if ($errors->has('password'))
      <span class="help-block">
      <strong>{{ $errors->first('password') }}</strong>
      </span>
      @endif
   </div>
</div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
   <div class="controls">
      <div class="input-icon">
         <i class="fa fa-check"></i>
         {!! Form::password('password_confirmation',['class'=>'form-control placeholder-no-fix','placeholder'=>'Re-type Your Password','autocomplete'=>'off']) !!}
         @if ($errors->has('password'))
         <span class="help-block">
         <strong style="color:#E73D4A">{{ $errors->first('password') }}</strong>
         </span>
         @endif
      </div>
   </div>
</div>
<div class="form-group{{ $errors->has('Gender') ? ' has-error' : '' }}">
   <div class="input-icon">
      <i class="fa fa-venus-mars"></i>
      <select name="Gender" id="" class="select form-control" placeholder="Gender">
         <option value="">Gender</option>
         <option value="Male">Male</option>
         <option value="Female">Female</option>
      </select>
      @if ($errors->has('Gender'))
      <span class="help-block">
      <strong>{{ $errors->first('Gender') }}</strong>
      </span>
      @endif
   </div>
</div>
<div class="form-group{{ $errors->has('UserBirthDate') ? ' has-error' : '' }}">
   <div class="input-icon">
      <i class="fa fa-font"></i>
      {!! Form::date('UserBirthDate',old('UserBirthDate'),['class'=>'form-control placeholder-no-fix']) !!}
      @if ($errors->has('UserBirthDate'))
      <span class="help-block">
      <strong>{{ $errors->first('UserBirthDate') }}</strong>
      </span>
      @endif
   </div>
</div>
<div class="form-group{{ $errors->has('UserCity') ? ' has-error' : '' }}">
   <div class="input-icon">
      <i class="fa fa-map-marker"></i>
      <select name="UserCity" id="" class="select form-control" placeholder="UserCity">
         <option value="">City</option>
         <option value="Naser City">Naser City</option>
         <option value="New Cairo">New Cairo</option>
         <option value="Sheraton">Sheraton</option>
         <option value="El tagamo3">El tagamo3</option>
         <option value="Down Town">Down Town</option>
         <option value="El-Manyal">El-Manyal</option>
         <option value="Garedn city">Garedn city</option>
         <option value="Abbasya">Abbasya</option>
         <option value="Mohandissen">Mohandissen</option>
         <option value="Dokky">Dokky</option>
         <option value="6th of october">6th of october</option>
         <option value="El-Kattamya">El-Kattamya</option>
         <option value="Maadi">Maadi</option>
         <option value="El-Mokattam">El-Mokattam</option>
         <option value="Rehab">Rehab</option>
         <option value="Madinaty">Madinaty</option>
         <option value="El-Threr">El-Threr</option>
         <option value="El-shikh zayed">El-shikh zayed</option>
      </select>
      @if ($errors->has('UserCity'))
      <span class="help-block">
      <strong>{{ $errors->first('UserCity') }}</strong>
      </span>
      @endif
   </div>
</div>
<input type="hidden" id="lat" value="" name="lat">
<input type="hidden" id="long" value="" name="long">
<div class="form-group">
   <label class="mt-checkbox mt-checkbox-outline">
   <input type="checkbox" name="remember" value="1" />
   <input type="checkbox" name="tnc" /> I agree to the
   <a href="javascript:;">Terms of Service </a> &
   <a href="javascript:;">Privacy Policy </a>
   <span></span>
   </label>
   <!--<div id="register_tnc_error"></div>-->
</div>
<div class="form-actions">
   {{--}}   <button id="register-back-btn" type="button" class="btn red btn-outline"><a href="{{url('/')}}">Back</a>  </button>  --}}
   <a id="register-back-btn" class="btn red btn-outline" href="{{url('/')}}"> Back
   </a>
   <button type="submit" id="register-submit-btn" class="btn green pull-right"> Sign Up </button>
   {{--}}     {!! Form::submit('Register',['class'=>'btn green pull-right']) !!}  --}}
</div>
{!! Form::close() !!}
@endsection
@section('footer')
<script>
   function geoFindMe() {
   
   
   
     if (!navigator.geolocation){
      $('#lat').val('');
      $('#long').val('');
       return;
     }
   
     function success(position) {
       var latitude  = position.coords.latitude;
       var longitude = position.coords.longitude;
             $('#lat').val(latitude);
             $('#long').val(longitude);
   
     }
   
     function error() {
      $('#lat').val('');
      $('#long').val('');
     }
   
   
     navigator.geolocation.getCurrentPosition(success, error);
   }
     window.onload=geoFindMe();
   
</script>
@endsection