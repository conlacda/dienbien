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
                        <h1>Tạo mới bài viết</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active">Trẻ em</li>
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
                                Bài viết sẽ được hiển thị tại trang chủ sau khi tạo
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
                                      action="{{'/admin/' . $modelName }}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="title" class="col-sm-2 control-label">Tiêu đề bài viết</label>

                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Tiêu đề" maxlength="1500">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="cover_img">Ảnh chủ đề bài viết</label>
                                                <input type="file" id="cover_img" name="cover_img">
                                                <p class="help-block">Ấn vào nút trên để chọn ảnh chủ đề cho bài
                                                    viết</p>
                                            </div>
                                            {{--                                            <div class="col-md-6">--}}
                                            {{--                                                <p>Ảnh hiện tại</p>--}}
                                            {{--                                                <img src="{{$post->cover_img}}" width="120px">--}}
                                            {{--                                            </div>--}}
                                        </div>
                                    </div>
                                    <textarea class="summernote" placeholder="Place some text here" name="content">
{{--                                         {{$post->content}}--}}
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
