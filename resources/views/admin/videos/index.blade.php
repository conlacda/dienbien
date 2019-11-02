@extends('admin.app')
@push('css')
    <style>
        div.polaroid {
            width: 80%;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin: 15px;
        }

        div.container {
            text-align: center;
            padding: 10px 20px;
        }
    </style>
@endpush
@section('content')
    <div class="content-wrapper" style="min-height: 1231.06px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Quản lý thư viện video</h1>
                        <a role="button" href="{{route('admin.videos.create')}}" class="btn btn-success"><i
                                class="fas fa-plus"></i>Thêm video mới</a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Trang quản lý</a></li>
                            <li class="breadcrumb-item active">Video</li>
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
                    <h3 class="card-title">Danh sách video</h3>

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
                    <div class="row">
                        @if (count($videos) == 0)
                            <div class="col-md-12">
                                <h3>Hiện tại hệ thống chưa có video nào , hãy đăng tải lên video đầu tiên của bạn nào
                                    !</h3>
                            </div>

                        @else
                            @foreach($videos as $video)
                                <div class="col-md-4 col-lg-4">
                                    <div class="polaroid">

                                        <video width="100%" controls>
                                            <source src="{{$video->link}}" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
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
            alertify.alert("{{ session()->get('message') }}").set({title: "Tải ảnh lên thành công !"});
        </script>
    @endif
@endpush
