@extends('admin.master')
@section('title')
    Category edit
@endsection

@section('body')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Edit Category Info</h4>
                </div>
                <div class="panel-body">
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <form action="{{route('update-category')}}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-4" >Category Name</label>8
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="category_name" value="{{$category->category_name}}" class="form-control1"/>
                                <input type="hidden" name="category_id" value="{{$category->id}}" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">update-category Description</label>
                            <div class="col-md-8 bg-warning">
                                <textarea name="category_description" class="form-control1">{{$category->category_description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Publication Status</label>
                            <div class="col-md-8 bg-warning">
                                <label><input type="radio" name="publication_status" {{$category->publication_status == 1 ? 'checked' : ''}} value="1"/> Published</label>
                                <label><input type="radio" name="publication_status" {{$category->publication_status == 0 ? 'checked' : ''}} value="0"/> Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-lg-offset-4 bg-info">
                                <input type="submit" name="btn" class="form-control1 btn btn-success1 btn-block" value="Update category Info"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
