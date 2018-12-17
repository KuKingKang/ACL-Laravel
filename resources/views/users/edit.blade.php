@extends('layouts.global')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User</div>
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <div class="card-body">
                   <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('users.update', ['id'=>$user->id])}}" method="POST">
                        @csrf
                        <input type="hidden" value="PUT" name="_method">
                        <label for="name">Name</label>
                        <input value="{{$user->name}}" class="form-control" placeholder="Full Name" type="text" name="name" id="name"/>
                        <br>
                        <label for="email">Email</label>
                        <input value="{{$user->email}}" class="form-control" placeholder="Email" type="text" name="email" id="email"/>
                        <br>
                        <input type="checkbox" {{in_array("ADMIN", json_decode($user->roles)) ? "checked" : ""}} name="roles[]" id="ADMIN" value="ADMIN">
                        <label for="ADMIN">Administrator</label>
                        <input type="checkbox" {{in_array("STAFF", json_decode($user->roles)) ? "checked" : ""}} name="roles[]" id="STAFF" value="STAFF">
                        <label for="STAFF">Staff</label></label>
                        <input type="checkbox" {{in_array("USER", json_decode($user->roles)) ? "checked" : ""}} name="roles[]" id="USER" value="USER">
                        <label for="USER">User</label>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Save"/>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
