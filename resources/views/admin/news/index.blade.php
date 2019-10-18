@extends('admin.app')
@push('css')
@endpush
@section('content')
    <div class="content-wrapper" style="min-height: 1231.06px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tin tức và sự kiện</h1>
                        <a role="button" href="{{route('admin.news.create')}}" class="btn btn-success"><i
                                class="fas fa-plus"></i>Thêm bài viết về mới</a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Trang quản lý</a></li>
                            <li class="breadcrumb-item active">Tin tức và sự kiện</li>
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
                    <h3 class="card-title">Danh sách</h3>

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
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 20%">
                                Tiêu đề
                            </th>
                            <th style="width: 10%">
                                Nội dung
                            </th>
                            <th style="width: 8%">
                                Ảnh chủ đề
                            </th>
                            <th style="width: 38%" class="text-center">
                                Thao tác
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $index => $post)
                            <tr>
                                <td>
                                    {{$index+1}}
                                </td>
                                <td>
                                    <a>
                                        {{$post->title}}
                                    </a>
                                    <br>
                                    <small>
                                        Cập nhật vào: {{$post->updated_at}}
                                    </small>
                                </td>
                                <td>
                                    <div class="content-hidden">
                                        {!! $post->content!!}
                                    </div>
                                </td>
                                <td>
                                    <img src="{{$post->cover_img}}" width="120px">
                                </td>
                                <td class="project-state">
                                    <a class="btn btn-primary btn-sm" data-toggle="modal"
                                       data-target="#{{$post->slug}}" href="#">
                                        <i class="fas fa-folder">
                                        </i>
                                        Xem
                                    </a>
                                    {{--                                    <a class="btn btn-info btn-sm" href="{{route('admin.children1s.edit',['children1' => $post->slug])}}">--}}
                                    <a class="btn btn-info btn-sm"
                                       href="{{route('admin.news.edit',['news' => $post->slug])}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Sửa
                                    </a>
                                    <a class="btn btn-info btn-sm" href="#"
                                       onclick="event.preventDefault(); document.getElementById('{{"delete-".$post->slug}}').submit();">
                                        <i class="fas fa-trash-alt">
                                        </i>
                                        Xóa
                                    </a>
                                    {{--                                    <form id={{'delete-'.$post->slug}} action="{{ route('admin.children1s.destroy',['children1' => $post->slug]) }}" method="POST" style="display: none;">--}}
                                    <form
                                        id={{'delete-'.$post->slug}} action="{{route('admin.news.destroy',['news' => $post->slug])}}"
                                        method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        {{method_field('delete')}}
                                    </form>
                                    <!-- Modal -->
                                    <div class="modal fade" id="{{$post->slug}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        id="exampleModalLongTitle">{{$post->title}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="{{$post->cover_img}}" width="200px">
                                                    <p>{!!$post->content!!}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a class="btn btn-info btn-sm"
                                                       href="{{route('admin.news.edit',['news' => $post->slug])}}">
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
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
@push('js')
    @if(session()->has('message'))
        <script>
            alertify.alert("{{ session()->get('message') }}").set({title: "Thao tác"});
        </script>
    @endif
@endpush
