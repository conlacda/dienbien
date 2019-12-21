@extends('admin.app')
@push('css')
    <style>

    </style>
@endpush
@section('content')
    <div class="content-wrapper" style="min-height: 1231.06px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Danh sách các hoạt động</h1>
                        <a role="button" href="{{route('admin.activities.create')}}" class="btn btn-success"><i
                                class="fas fa-plus"></i>Thêm bài viết về hoạt động</a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Trang quản lý</a></li>
                            <li class="breadcrumb-item active">Trẻ em</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Chương trình hỗ trợ</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                                title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body p-0" style="display: block;">
                    <table class="table table-striped projects" style="table-layout: fixed; !important;">
                        <thead>
                        <tr>
                            <th style="width: 3%">
                                #
                            </th>
                            <th style="width: 20%">
                                Tiêu đề
                            </th>
                            <th style="width: 46%">
                                Bài viết
                            </th>
                            <th style="width: 8%">
                                Ảnh chủ đề
                            </th>
                            <th style="width: 23%" class="text-center">
                                Thao tác
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($activities as $index => $activity)
                            <tr>
                                <td>
                                    {{$index+1}}
                                </td>
                                <td>
                                    <a>
                                        {{$activity->title}}
                                    </a>
                                    <br>
                                    <small>
                                        Cập nhật vào: {{$activity->updated_at}}
                                    </small>
                                </td>
                                <td>
                                    <div class="content-hidden">

                                        {!! $activity->content!!}
                                    </div>
                                </td>
                                <td>
                                    <img src="{{$activity->cover_img}}" width="100%">
                                </td>
                                <td class="project-state">
                                    <a class="btn btn-primary btn-sm" data-toggle="modal"
                                       data-target="#{{$activity->slug}}" href="#">
                                        <i class="fas fa-folder">
                                        </i>
                                        Xem
                                    </a>
                                    {{--                                    <a class="btn btn-info btn-sm" href="{{route('admin.children1s.edit',['children1' => $post->slug])}}">--}}
                                    <a class="btn btn-info btn-sm"
                                       href="{{route('admin.activities.edit',['activity' => $activity->slug])}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Sửa
                                    </a>
                                    <a class="btn btn-info btn-sm" href="#"
                                       onclick="event.preventDefault(); document.getElementById('{{"delete-".$activity->slug}}').submit();">
                                        <i class="fas fa-trash-alt">
                                        </i>
                                        Xóa
                                    </a>
                                    {{--                                    <form id={{'delete-'.$post->slug}} action="{{ route('admin.children1s.destroy',['children1' => $post->slug]) }}" method="POST" style="display: none;">--}}
                                    <form
                                        id={{'delete-'.$activity->slug}} action="{{route('admin.activities.destroy',['activity' => $activity->slug])}}"
                                        method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        {{method_field('delete')}}
                                    </form>
                                    <!-- Modal -->
                                    <div class="modal fade" id="{{$activity->slug}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        id="exampleModalLongTitle">{{$activity->title}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="{{$activity->cover_img}}" width="200px">
                                                    <div style="overflow: scroll">
                                                        {!!$activity->content!!}
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a class="btn btn-info btn-sm"
                                                       href="{{route('admin.children1s.edit',['children1' => $activity->slug])}}">
                                                        <i class="fas fa-pencil-alt"></i>Sửa
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$activities->links()}}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
@push('js')
    <script>
    </script>
@endpush
