@extends('admin.app')
@push('css')
    <style>
        div.polaroid {
            width: 80%;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin : 15px;
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
                        <h1>Quản lý thư viện ảnh</h1>
                        <a role="button" href="{{route('admin.galleries.create')}}" class="btn btn-success"><i
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
                    <h3 class="card-title">Danh sách album ảnh</h3>

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
                        @foreach($galleries as $gallery)
                            <div class="col-md-4 col-lg-4">
                                <div class="polaroid">
                                    @if (count($gallery->images) > 0)
                                        <img src="{{$gallery->images[0]->link}}" alt="5 Terre" style="width:100%;height: 300px">
                                    @else
                                        <img src="{{\App\Image::DEFAULT_ALBUM_IMAGE}}" alt="5" style="width: 100%;height: 300px">
                                    @endif
                                    <div class="container">
                                        <a href="{{route('admin.galleries.show',['gallery' => $gallery->slug])}}">{{$gallery->title ?? "Xem album ảnh"}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{ $galleries->links() }}
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
