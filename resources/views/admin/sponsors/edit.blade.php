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
                        <h1>{{$sponsor->name}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Trang quản lý</a></li>
                            <li class="breadcrumb-item active">Nhà tài trợ</li>
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
                                <small>Cập nhật lần cuối vào: {{$sponsor->updated_at}}</small>
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
                                      action="{{route('admin.sponsors.update',['sponsor' => $sponsor->slug])}}">
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="cover_img">Ảnh đại diện của nhà tài trợ</label>
                                                <input type="file" id="cover_img" name="cover_img">
                                                <p class="help-block">Ấn vào nút trên để chọn ảnh mới thay thế</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Ảnh hiện tại</p>
                                                <img src="{{$sponsor->cover_img}}" width="120px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Tên nhà tài trợ</label>
                                        <input type="text" name="name" id="name" class="form-control" maxlength="1500"
                                               placeholder="Nhập tên nhà tài trợ ..." value="{{$sponsor->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="link">Trang web/ Đường link</label>
                                        <input type="text" name="link" id="link" class="form-control" maxlength="1500"
                                               placeholder="Nhập tiêu đề ..." value="{{$sponsor->link}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="introduction">Lời giới thiệu về nhà tài trợ</label>
                                        <textarea class="summernote" placeholder="Nhập ngắn gọn lời giới thiệu về nhà tài trợ" name="introduction">
                                         {{$sponsor->introduction}}
                                        </textarea>
                                    </div>
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
            alertify.alert("{{ session()->get('message') }}").set({title: "Cập nhật thông tin nhà tài trợ "});
        </script>
    @endif
@endpush
