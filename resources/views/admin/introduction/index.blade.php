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
                        <h1>Giới thiệu</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Trang quản lý</a></li>
                            <li class="breadcrumb-item active">Giới thiệu</li>
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
                    <h3 class="card-title">Giới thiệu</h3>

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
                            <th style="width: 15%">
                                Đề mục
                            </th>
                            <th style="width: 57%">
                                Bài viết
                            </th>
                            <th style="width: 25%" class="text-center">
                                Thao tác
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($introductions as $introduction)
                            <tr>
                                <td>
                                    #
                                </td>
                                <td>
                                    <a>
                                        {{$introduction->title}}
                                    </a>
                                    <br>
                                    <small>
                                        Cập nhật vào: {{$introduction->updated_at}}
                                    </small>
                                </td>
                                <td>
                                    <div class="content-hidden">
                                        {!! $introduction->content!!}
                                    </div>
                                </td>
                                <td class="project-state">
                                    <a class="btn btn-primary btn-sm" data-toggle="modal"
                                       data-target="#{{$introduction->slug}}" href="#">
                                        <i class="fas fa-folder">
                                        </i>
                                        Xem
                                    </a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="{{$introduction->slug}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        id="exampleModalLongTitle">{{$introduction->title}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div style="overflow: scroll">
                                                        {!!$introduction->content!!}
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a class="btn btn-info btn-sm"
                                                       href="{{route('admin.introductions.edit',['introduction' => $introduction->slug])}}">
                                                        <i class="fas fa-pencil-alt"></i>Sửa
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn btn-info btn-sm"
                                       href="{{route('admin.introductions.edit',['introduction' => $introduction->slug])}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Sửa
                                    </a>
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
    <script>
        $(document).ready(function () {
            $('[data-card-widget=remove]').hide();
        });
    </script>
@endpush
