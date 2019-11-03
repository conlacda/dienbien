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
                                        <div class="container">
                                            <!-- Button trigger modal -->
                                            <a data-toggle="modal" href="#"
                                                    data-target="#video-{{$video->id}}">
                                                {{substr($video->title,0,80) . '...'}}
                                            </a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="video-{{$video->id}}" tabindex="-1" role="dialog"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Thông tin chi tiết về video</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form class="custom-content" method="POST" action="{{route('admin.videos.update',['video' => $video->id])}}" enctype="multipart/form-data">
                                                                {{csrf_field()}}
                                                                {{method_field('PUT')}}
                                                                <div class="form-group row">
                                                                    <label for="title">Tên/Tiêu đề video</label>
                                                                    <input type="text" class="form-control" id="title" placeholder="" name="title" required value="{{$video->title}}"
                                                                           maxlength="250">
                                                                    {{--                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="place">Địa điểm</label>
                                                                    <input type="text" class="form-control" name="place" id="place" value="{{$video->place}}"
                                                                           placeholder="Địa điểm có trong video" maxlength="250">
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="note">Ghi chú / mô tả thêm </label>
                                                                    <input type="text" class="form-control" name="note" id="note" value="{{$video->note}}"
                                                                           placeholder="Ghi chú thêm về video nếu có">
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Cập nhật vào: {{$video->updated_at}}</p>
                                                                </div>
                                                                <button type="submit" class="btn btn-primary row" style="float: left">Cập nhật thông tin video</button>
                                                            </form>



                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-info"
                                                                    data-dismiss="modal">Đóng
                                                            </button>
                                                            <button type="button" class="btn btn-danger" id="delete-button" data-id="{{$video->id}}">Xóa video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    <script>
        $('#delete-button').click(function () {
            let videoId = $(this).attr('data-id');
            if (confirm('Bạn có thực sự muốn xóa video này!')){
                axios.delete("/admin/videos/" + videoId ,{

                }).then(function (res) {
                    location.reload();
                }).catch(function (err) {
                    console.log(err.data);
                })
            }
        })
    </script>
    @if(session()->has('message'))
        <script>
            alertify.alert("{{ session()->get('message') }}").set({title: "Thông báo !"});
        </script>
    @endif
@endpush
