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


{{--
                <div class="form-group{{ $errors->has('Gender') ? ' has-error' : '' }}">
                                                    <div class="input-icon">

               {!! Form::select("Gender",Gender(),['class' =>'form-control select2 input-large select2-hidden-accessible','placeholder'=>'gender']) !!}
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
                                             --}}
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
         <button id="register-back-btn" type="button" class="btn red btn-outline"><a href="{{url('/')}}">Back</a>  </button>
           <button type="submit" id="register-submit-btn" class="btn green pull-right"> Sign Up </button>

               {{--}}     {!! Form::submit('Register',['class'=>'btn green pull-right']) !!}  --}}
                </div>

             {!! Form::close() !!}

@endsection


@section('footer')
<script>


</script>


@endsection
