@if (App\Login::count() >= 1)
    {{--Modal Edit User Start--}}
    <div class="modal fade" tabindex="-1" id="edituser-{{$user->id}}" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                {!! Form::open(['action' => ['CrudController@update', $user->id],'method' => 'POST']) !!}
                <div class="modal-body">
                    @include('inc.message')
                    
                    <div class="form-group row">
                        {{Form::label('txtID', 'ID', ['class' => 'col-form-label col-md-4'])}}
                        <div class="col-md-8">
                            {{Form::text('txtID', $user->id, ['class' => 'form-control', 'placeholder' => 'ID', 'readonly' => 'true'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        {{Form::label('txtFullname', 'Fullname', ['class' => 'col-form-label col-md-4'])}}
                        <div class="col-md-8">
                            {{Form::text('txtFullname', $user->fullname, ['class' => 'form-control', 'placeholder' => 'Fullname', 'readonly' => 'true'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        {{Form::label('txtUsername', 'Username', ['class' => 'col-form-label col-md-4'])}}
                        <div class="col-md-8">
                            {{Form::text('txtUsername', $user->username, ['class' => 'form-control', 'placeholder' => 'Username', 'required'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        {{Form::label('txtEmail', 'Email Address', ['class' => 'col-form-label col-md-4'])}}
                        <div class="col-md-8">
                            {{Form::email('txtEmail', $user->emailadd, ['class' => 'form-control', 'placeholder' => 'Email Address', 'required'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        {{Form::label('txtRole', 'Role', ['class' => 'col-form-label col-md-4'])}}
                        <div class="col-md-8">
                            @if ($user->role == 0)
                                {{Form::select('role', ['0' => 'superuser', '1' => 'admin', '2' => 'user'], '0', ['class' => 'form-control', 'disabled' => 'disabled'])}}
                            @elseif($user->role == 1)
                                {{Form::select('role', ['0' => 'superuser', '1' => 'admin', '2' => 'user'], '1', ['class' => 'form-control', 'disabled' => 'disabled'])}}
                            @else 
                                {{Form::select('role', ['0' => 'superuser', '1' => 'admin', '2' => 'user'], '2', ['class' => 'form-control', 'disabled' => 'disabled'])}}
                            @endif
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Close', ['class' => 'btn btn-secondary', 'data-dismiss' => 'modal'])}}
                    {{Form::submit('Save Changes', ['class' => 'btn btn-primary'])}}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    {{--Modal Edit User End--}}
@endif