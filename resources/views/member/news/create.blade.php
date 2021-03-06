@extends('member.app')
@push('css')
@endpush
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tạo bài viết mới</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active">Bài đăng gây quỹ</li>
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
                                Bài viết sẽ được kiểm duyệt bởi admin và hiển thị tại trang chủ nểu được đồng ý
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
                                <form method="post" enctype="multipart/form-data" id="post-form"
                                      action="{{route('member.news.store')}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="title" class="col-sm-2 control-label">Tiêu đề bài viết</label>

                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="title" name="title"
                                                   placeholder="Tiêu đề" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Nội dung bài viết</label>
                                        <textarea class="summernote" placeholder="Nhập vào đây nội dung bài viết"
                                                  name="content" id="content">
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
            alertify.alert("{{ session()->get('message') }}").set({title: "Cập nhật nội dung bài viết thành công "});
        </script>
    @endif
    <script>
        $('#post-form').submit(function () {
            let content = $("#content").summernote('code');
            if (content == '') {
                event.preventDefault();
                alert('Nội dung bài viết không nên để trống');
            }
        })
    </script>
@endpush
