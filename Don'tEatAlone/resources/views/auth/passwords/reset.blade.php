@extends('layouts.app')
@section('title')
Reset password
@endsection
@section('content')
    <h3>Password Reset</h3>
                <p> Enter your personal details below: </p>
                       <div class="alert alert-danger display-hide">
                                           <button class="close" data-close="alert"></button>
                                           <span> Enter valid information . </span>
                                       </div>
                    <form class="login-form" role="form" method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">


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
                                                                     <div class="controls">
                                                                         <div class="input-icon">
                                                                             <i class="fa fa-lock"></i>


                      {!! Form::password('password',['class'=>'form-control placeholder-no-fix','placeholder'=>'Password','autocomplete'=>'off']) !!}
                                                                             @if ($errors->has('password'))
                                                                                                         <span class="help-block">
                                                                                                             <strong style="color:#E73D4A">{{ $errors->first('password') }}</strong>
                                                                                                         </span>
                                                                                                     @endif
                                                                         </div>
                                                                     </div>
                                                                 </div>

           <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                            <div class="input-icon">
                                                <i class="fa fa-check"></i>
                                                {!! Form::password('password_confirmation',['class'=>'form-control placeholder-no-fix', 'id'=>'password' ,'placeholder'=>'Re-type Your Password','autocomplete'=>'off']) !!}
                                                @if ($errors->has('password_confirmation'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                        </div>


                              <div class="form-actions">

                       <button type="submit" id="register-submit-btn" class="btn green pull-right"> Sign Up </button>
                              </div>
                    </form>

@endsection
