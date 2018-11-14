{{--Modal Login Start--}}
<div class="modal fade" tabindex="-1" id="login" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {!! Form::open(['method' => 'POST', 'action' => ['LoginController@login']]) !!}
            <div class="modal-body">
                <div class="form-group row">
                    {{Form::label('txtEmail', 'Email Address', ['class' => 'col-form-label col-md-4'])}}
                    <div class="col-md-8">
                        {{Form::text('txtEmail', '', ['class' => 'form-control', 'placeholder' => 'Email Address'])}}
                    </div> 
                </div>
                <div class="form-group row">
                    {{Form::label('txtPassword', 'Password', ['class' => 'col-form-label col-md-4'])}}
                    <div class="col-md-8">
                        {{Form::password('txtPassword', ['class' => 'form-control', 'placeholder' => 'Password'])}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4 mx-auto">
                        {{Form::checkbox('name', 'value')}}
                        {{Form::label('', 'Remember Me', ['class' => 'col-form-label'])}}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                {{link_to('forgotpassword', 'Forgot Password?', $title = null, $attributes = [], $secure = null)}}
                {{Form::submit('Login', ['class' => 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
{{--Modal Login End--}}