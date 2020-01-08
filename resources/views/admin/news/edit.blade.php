@extends('admin.app')
@push('css')
@endpush
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{$news->title}}</h1>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Chỉnh sửa nội dung bài viết
                                <small>Cập nhật lần cuối vào: {{$news->updated_at}}</small>
                            </h3>
                            <!-- tools box -->
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                                        data-toggle="tooltip"
                                        title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove"
                                        data-toggle="tooltip"
                                        title="Remove">
                                    <i class="fas fa-times"></i></button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pad">
                            <div class="mb-3">
                                <form method="post" enctype="multipart/form-data"
                                      action="{{route('admin.news.update',['news' => $news->slug])}}">
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="cover_img">Ảnh chủ đề bài viết</label>
                                                <input type="file" id="cover_img" name="cover_img">
                                                <p class="help-block">Ấn vào nút trên để chọn ảnh chủ đề cho bài
                                                    viết</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Ảnh hiện tại</p>
                                                <img src="{{$news->cover_img}}" width="120px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Tiêu đề</label>
                                        <input type="text" name="title" maxlength="1500" id="title" class="form-control" placeholder="Nhập tiêu đề ..." value="{{$news->title}}">
                                    </div>
                                    <textarea class="summernote" placeholder="Place some text here" name="content">
                                         {{$news->content}}
                                    </textarea>
                                    <button type="submit" class="btn btn-success">Lưu</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@push('js')
    @if(session()->has('message'))
        <script>
            alertify.alert("{{ session()->get('message') }}").set({title: "Cập nhật nội dung bài viết thành công "});
        </script>
    @endif
@endpush
