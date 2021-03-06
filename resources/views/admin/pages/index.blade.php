@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Posted Jobs</h3>
                    <div class="box-tools">
                        <a class="btn btn-primary" href="/pages/create">Create Page</a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Employer</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($pages as $page)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->status }}</td>
                                <td></td>
                                <td>
                                    <a href="/pages/{{ $page->id }}/edit"
                                       class="btn btn-primary">
                                        <i data-toggle="tooltip" title="Edit" class="fa fa-edit"></i>
                                    </a>
                                    <form action="/pages/{{ $page->id }}" method="post" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i data-toggle="tooltip" title="Delete" class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        @include('inc._paginate',['model' => $pages])
                    </ul>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection