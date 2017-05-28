<div class="form-body">
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <div class="input-icon">
            <i class="fa fa-font"></i>
            {!! Form::text('name',old('name'),['class'=>'form-control placeholder-no-fix','placeholder'=>'User Name']) !!}
            @if ($errors->has('name'))
            <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
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
    <div class="form-group{{ $errors->has('UserCity') ? ' has-error' : '' }}">
        <div class="input-icon">
            <i class="fa fa-font"></i>
            {!! Form::select("UserCity",UserCity(), null ,['class' =>'form-control select2 input-large select2-hidden-accessible','placeholder'=>' city']) !!}
            @if ($errors->has('UserCity'))
            <span class="help-block">
            <strong>{{ $errors->first('UserCity') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('Gender') ? ' has-error' : '' }}">
        <div class="input-icon">
            <i class="fa fa-font"></i>
            {!! Form::select("Gender",Gender(), null ,['class' =>'form-control select2 input-large select2-hidden-accessible','placeholder'=>'gender']) !!}                        @if ($errors->has('UserCity'))
            <span class="help-block">
            <strong>{{ $errors->first('Gender') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn green">submit</button>
            </div>
        </div>
    </div>
    <!-- END FORM-->
</div>