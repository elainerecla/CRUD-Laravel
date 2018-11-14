{{--Modal Register Start--}}
<div class="modal fade" tabindex="-1" id="register" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Register User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {!! Form::open(['action' => 'CrudController@store', 'method' => 'POST']) !!}
            <div class="modal-body">
                <div class="form-group row">
                    {{Form::label('txtFullname', 'Fullname', ['class' => 'col-form-label col-md-4'])}}
                    <div class="col-md-8">
                        {{Form::text('txtFullname', '', ['class' => 'form-control', 'placeholder' => 'Fullname', 'required'])}}
                    </div>
                </div>
                <div class="form-group row">
                    {{Form::label('txtUsername', 'Username', ['class' => 'col-form-label col-md-4'])}}
                    <div class="col-md-8">
                        {{Form::text('txtUsername', '', ['class' => 'form-control', 'placeholder' => 'Username', 'required'])}}
                    </div>
                </div>
                <div class="form-group row">
                    {{Form::label('txtEmail', 'Email Address', ['class' => 'col-form-label col-md-4'])}}
                    <div class="col-md-8">
                        {{Form::email('txtEmail', '', ['class' => 'form-control', 'placeholder' => 'Email Address', 'required'])}}
                    </div>
                </div>
                <div class="form-group row">
                    {{Form::label('txtPassword', 'Password', ['class' => 'col-form-label col-md-4'])}}
                    <div class="col-md-8">
                        {{Form::password('txtPassword', ['class' => 'form-control', 'placeholder' => 'Password', 'required'])}}
                    </div>
                </div>
                <div class="form-group row">
                    {{Form::label('txtRetypePassword', 'Re-type Password', ['class' => 'col-form-label col-md-4'])}}
                    <div class="col-md-8">
                        {{Form::password('txtRetypePassword', ['class' => 'form-control', 'placeholder' => 'Re-type Password', 'required'])}}
                    </div>
                </div>
                <div class="form-group row">
                    {{Form::label('txtRole', 'Role', ['class' => 'col-form-label col-md-4'])}}
                    <div class="col-md-8">
                        {{Form::text('txtRole', 'user', ['class' => 'form-control', 'placeholder' => 'Role', 'readonly' => 'true'])}}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                {{Form::submit('Close', ['class' => 'btn btn-secondary', 'data-dismiss' => 'modal'])}}
                {{Form::submit('Register', ['class' => 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
{{--Modal Register End--}}