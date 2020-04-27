@extends('admin.master')
@section('title')
    Brand Manage
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <table class="table table-bordered">
                        <tr class="bg-danger">
                            <th>SI NO.</th>
                            <th>Brand Name</th>
                            <th>Brand Description</th>
                            <th>Publication status</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $brand->brand_name }}</td>
                                <td>{{ $brand->brand_description }}</td>
                                <td>{{ $brand->publication_status == 1 ? 'published' : 'unpublished' }}</td>
                                <td>
                                    @if($brand->publication_status == 1)
                                    <a href="{{route('unpublished-brand', ['id'=>$brand->id])}}" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                    @else
                                        <a href="{{route('published-brand', ['id'=>$brand->id])}}" class="btn btn-danger btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{route('edit-brand', ['id'=>$brand->id])}}" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{route('delete-brand', ['id'=>$brand->id])}}" class="btn btn-danger btn-xs deleteConfirm">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

