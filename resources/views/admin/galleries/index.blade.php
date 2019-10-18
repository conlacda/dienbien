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
                        <h1>Quản lý thư viện ảnh</h1>
                        <a role="button" href="{{route('admin.sponsors.create')}}" class="btn btn-success"><i
                                class="fas fa-plus"></i>Thêm thư viện ảnh mới</a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Trang quản lý</a></li>
                            <li class="breadcrumb-item active">Thư viện ảnh</li>
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
                    <h3 class="card-title">Nhà tài trợ</h3>

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
                                Tên
                            </th>
                            <th style="width: 20%">
                                Trang web
                            </th>
                            <th style="width: 20%">
                                Lời giới thiệu
                            </th>
                            <th style="width: 10%">
                                Hình ảnh
                            </th>
                            <th style="width: 28%" class="text-center">
                                Thao tác
                            </th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        noi dung--}}
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
            alertify.alert("{{ session()->get('message') }}").set({title: "Cập nhật nội dung bài viết thành công "});
        </script>
    @endif
@endpush
