@extends('admin.master')
@section('title')
        Admin profile
@endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1">
                <img src="{{asset('/')}}/uploads/avatars/{{Auth::user()->avatar}}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px; margin-top: 20px">
                <h2 style="margin-top: 20px;">{{Auth::user()->name}}'s profile</h2>
                <form enctype="multipart/form-data" action={{route('/profileImage', ['id'=>$user->id])}} method="POST">
                {{--<form enctype="multipart/form-data" action={{route('/profileImage', ['id'=>$user->id])}} method="POST">--}}
                    <label>Update Profile Image</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" value="Submit" class="pull-right btn btn-sm btn-primary">
                </form>
            </div>
        </div>
    </div>
@endsection


