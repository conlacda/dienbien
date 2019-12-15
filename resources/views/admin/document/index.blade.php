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
                        <h1>Văn bản hành chính</h1>
                        <button class="btn btn-success" data-toggle="modal" data-target="#uploadModal">
                            <i class="fas fa-upload"></i>Tải lên
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog"
                             aria-labelledby="uploadModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tải lên văn bản</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{route('admin.document.store')}}"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="title">Tiêu đề/Tên</label>
                                                <input type="text" class="form-control" id="title" name="title"
                                                       placeholder="Nhập tiêu đề/tên văn bản" required
                                                       autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="file">File/Tệp văn bản</label>
                                                <input type="file" class="form-control" id="file" name="file" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Tải lên</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Đóng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Trang quản lý</a></li>
                            <li class="breadcrumb-item active">Văn bản hành chính</li>
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
                            <th style="width: 40%">
                                Tiêu đề
                            </th>
                            <th style="width: 20%">
                                File
                            </th>
                            <th style="width: 20%">
                                Thời gian
                            </th>
                            <th style="width: 19%" class="text-center">
                                Thao tác
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($documents as $index => $document)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$document->title}}</td>
                                <td><a href="{{$document->link}}" download>Tải về</a></td>
                                <td>{{$document->created_at}}</td>
                                <td class="text-center">
                                    <form method="POST" action="{{route('admin.document.destroy',['slug' => $document->slug])}}">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button class="btn btn-danger" type="submit">Xóa</button>
                                    </form>
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
    {{--    @if(session()->has('message'))--}}
    {{--        <script>--}}
    {{--            alertify.alert("{{ session()->get('message') }}").set({title: "Thao tác"});--}}
    {{--        </script>--}}
    {{--    @endif--}}
@endpush
