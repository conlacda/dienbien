@extends('admin.app')
@push('css')
<style type="text/css">
    input[type=file] {

        display: inline;

    }

    #image_preview {

        border: 1px solid black;

        padding: 10px;

    }

    #image_preview img {

        width: 200px;

        padding: 5px;

    }
</style>
@endpush
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm mới 1 thư viện ảnh</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active">Thư viện ảnh</li>
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
                            Thư viện ảnh
                        </h3>
                        <!-- tools box -->
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        <div class="mb-3">
                            <form method="post" enctype="multipart/form-data" action="{{route('admin.galleries.store')}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="title" class="col-sm-12 control-label">Lời giới thiệu ngắn về bộ
                                        ảnh</label>

                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="title" name="title" maxlength="1500" placeholder="Tiêu đề" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-md-12 control-label">Chọn album ảnh muốn tải lên</label>
                                    <div class="col-md-12">
                                        <input type="file" class="form-control" name="album[]" id="album"  multiple required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div id="image_preview"></div>
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
<script type="text/javascript">
    $("#album").change(function() {
        $('#image_preview').html("");
        var total_file = document.getElementById("album").files.length;
        for (var i = 0; i < total_file; i++)
        {
            $('#image_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "'>");

        }
    });
</script>
@endpush
