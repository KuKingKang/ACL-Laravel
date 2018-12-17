@extends('layouts.global')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create User</div>
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <div class="card-body">
                   <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('users.store')}}" method="POST">
                        @csrf
                        <label for="name">Name</label>
                        <input class="form-control" placeholder="Full Name" type="text" name="name" id="name"/>
                        <br>
                        <label for="username">Email</label>
                        <input class="form-control" placeholder="Email" type="text" name="email" id="email"/>
                        <br>
                        <label for="password">Password</label>
                        <input class="form-control" placeholder="Password" type="password" name="password" id="password"/>
                        <br>
                        <label for="password_confirmation">Password Confirmation</label>
                        <input class="form-control" placeholder="Password Confirmation" type="password" name="password_confirmation" id="password_confirmation"/>
                        <br>
                        <label for="">Roles</label>
                        <br>
                        <input type="checkbox" name="roles[]" id="ADMIN" value="ADMIN">
                        <label for="ADMIN">ADMINISTRATOR</label>
                        <input type="checkbox" name="roles[]" id="STAFF" value="STAFF">
                        <label for="STAFF">STAFF</label>
                        <input type="checkbox" name="roles[]" id="USER" value="USER">
                        <label for="USER">USER</label>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Save"/>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
