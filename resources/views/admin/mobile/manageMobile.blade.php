@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center text-success">Manage Mobile Info</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr class="bg-danger">
                                <th>SI. NO</th>
                                <th>Brand Name</th>
                                <th>Mobile Name</th>
                                <th>Model</th>
                                <th>Price</th>
                                <th>Mobile Image</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            @php($i = 1)
                            @foreach($mobiles as $mobile)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $mobile->brand_name }}</td>
                                    <td>{{ $mobile->mobile_name }}</td>
                                    <td>{{ $mobile->model }}</td>
                                    <td>{{ $mobile->price }}</td>
                                    <td>
                                        <img src="{{asset($mobile->file)}}" width="150px" height="150px" alt="image is here"/>
                                    </td>
                                    <td>{{ $mobile->publication_status == 1 ? 'published' : 'unpublished' }}</td>


                                    <td class="btn btn-group-horizontal">
                                        <a href="{{ route('mobilePhone-details', ['id'=>$mobile->id]) }}" class="btn btn-primary btn-xs" title="view details">
                                            <span class="glyphicon glyphicon-zoom-in"></span>
                                        </a>
                                        @if($mobile->publication_status==1)
                                        <a href="{{ route('unpublished-mobilePhone', ['id'=>$mobile->id]) }}" class="btn btn-info btn-xs" title="published">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                        @else
                                           <a href="{{ route('published-mobilePhone', ['id'=>$mobile->id]) }}" class="btn btn-danger btn-xs" title="Unpublished">
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>
                                        @endif

                                        <a href="" class="btn btn-default btn-xs" title="Add Alternative Image">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </a>

                                        <a href="{{ route('edit-mobilePhone', ['id'=>$mobile->id]) }}" class="btn btn-primary btn-xs" title="edit">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="{{ route('delete-mobilePhone', ['id'=>$mobile->id]) }}" class="btn btn-danger btn-xs deleteConfirm" title="delete">
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
    </div>

@endsection
