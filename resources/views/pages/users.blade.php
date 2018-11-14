@extends('layouts.template')

@section('content')
    {{--Content Start--}}
    <div class="jumbotron">
        <h1 class="display-4">Welcome to CRUD!</h1>
        <p class="lead">This is a simple CRUD user interface.</p>
    </div>

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-8 my-2">
                <h4 class="font-weight-bold float-left">User Accounts</h4>

                <form action="" class="form-inline float-right">
                    <input type="text" class="form-control" id="txtSearch" placeholder="Search users..." type="search">
                    <button class="btn btn-info ml-1">Search</button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Fullname</td>
                            <td>Username</td>
                            <td>Email</td>
                            <td>Role</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($login as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->fullname}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->emailadd}}</td>
                                @if ($user->role == 0)
                                    <td>superuser</td>
                                @elseif ($user->role == 1)
                                    <td>admin</td>
                                @else
                                    <td>user</td>
                                @endif
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edituser-{{$user->id}}">Edit</a>
                                    @if ($user->status == 0)
                                        <a href="#" class="btn btn-danger btn-sm">Enable</a>
                                    @else 
                                        <a href="#" class="btn btn-danger btn-sm" data-toggle="collapse" data-target="#disable-{{$user->id}}">Disable</a>
                                    @endif
                                    
                                    <div class="collapse" id="disable-{{$user->id}}">
                                        <div class="alert alert-danger" role="alert">
                                            Disable Account? <a href="#">Yes</a><a href="/users" class="mx-1">No</a>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div> 
                                    </div>
                                </td>
                            </tr>
                            @include('modals.edituser')
                        @endforeach
                        @if(Session::has('success'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                {{ Session::get('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </p>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    {{--Content End--}}
@endsection