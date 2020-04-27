@extends('admin.master')
@section('title')
    Logo Manage
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr class="bg-danger">
                            <th>SI NO.</th>
                            <th>Logo Name</th>
                            <th>File Name</th>
                            <th>Publication status</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($logoInfo as $logoInfo)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $logoInfo->logo_name }}</td>
                                <td>{{ $logoInfo->file_name }}</td>
                                <td>{{ $logoInfo->publication_status == 1 ? 'published' : 'unpublished' }}</td>
                                <td>
                                    @if($logoInfo->publication_status == 1)
                                        <a href="{{route('unpublished-logo', ['id'=>$logoInfo->id])}}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{route('published-logo', ['id'=>$logoInfo->id])}}" class="btn btn-danger btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{route('edit-logo',['id'=>$logoInfo->id])}}" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{route('delete-logo', ['id'=>$logoInfo->id])}}" class="btn btn-danger btn-xs button deleteConfirm">
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

