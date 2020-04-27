@extends('admin.master')
@section('title')
    Logo edit
@endsection

@section('body')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Edit Logo Info</h4>
                </div>
                <div class="panel-body">
                    <form action="{{route('update-logo')}}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-4" >Logo Name</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="logo_name" value="{{$logo->logo_name}}" class="form-control1"/>
                                <input type="hidden" name="logo_id" value="{{$logo->id}}" class="form-control1"/>
                            </div>
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label class="control-label col-md-4" >File Name</label>--}}
{{--                            <div class="col-md-8 bg-warning">--}}
{{--                                <input type="text" name="logo_name" value="{{$logo->file_name}}" class="form-control1"/>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <label class="control-label col-md-4">Publication Status</label>
                            <div class="col-md-8 bg-warning">
                                <label><input type="radio" name="publication_status" {{$logo->publication_status == 1 ? 'checked' : ''}} value="1"/> Published</label>
                                <label><input type="radio" name="publication_status" {{$logo->publication_status == 0 ? 'checked' : ''}} value="0"/> Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-lg-offset-4 bg-info">
                                <input type="submit" name="btn" class="form-control1 btn btn-success1 btn-block" value="Update Logo Info"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

