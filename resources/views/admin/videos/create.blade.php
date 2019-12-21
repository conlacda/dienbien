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

        .custom-content {
            padding: 10px;
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
                        <h1>Thêm video mới</h1>
                        <p></p>
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

                </div>
                <div class="card-body p-0">
                    <form class="custom-content" method="POST" action="{{route('admin.videos.store')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="title">Tên/Tiêu đề video</label>
                            <input type="text" class="form-control" id="title" placeholder="" name="title" required
                                   maxlength="250">
                            {{--                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                        </div>
                        <div class="form-group">
                            <label for="place">Địa điểm</label>
                            <input type="text" class="form-control" name="place" id="place"
                                   placeholder="Địa điểm có trong video" maxlength="250">
                        </div>
                        <div class="form-group">
                            <label for="note">Ghi chú / mô tả thêm </label>
                            <input type="text" class="form-control" name="note" id="note"
                                   placeholder="Ghi chú thêm về video nếu có">
                        </div>
                        <div class="form-group">
                            <label for="video">Video của bạn
                                <a href="#" id="video-state-button">Tải lên video</a>
                                <a href="#" id="link-state-button" style="display: none">Dùng link video</a>
                            </label>
                            <div class="input-group" style="display: none" id="video-up">
{{--                            <div class="input-group" id="video-up">--}}
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="video" name="video"
                                           accept=".mp4,.webm,.mkv,.flv,.vob,.avi,.mov,.qt,.wmv,.yuv,.rm,.rmvb,.asf,.amv,.m4p,.mpg,.mpeg,.mpv,.mpe,.mpeg,.mpg,.m4v,.svi,.3gp,.3g2,.mxf,.roq,.nsv,.flv,.f4v,.f4p,.f4a,.f4b">
                                    <label class="custom-file-label" for="video">Chọn video của bạn và tải lên</label>
                                </div>
                            </div>
                            <div class="input-group" id="link-up">
                                <div class="custom-file">
                                    <input type="text" class="form-control" name="link" placeholder='Dán iframe vào đây . Ví dụ youtube - ấn chuột phải vào video sau đó nhấn "Sao chép mã nhúng" để lấy link'>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </form>
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
        var uploadField = document.getElementById("video");
        uploadField.onchange = function() {
            if(this.files[0].size > 10000000){
                alert("Kích thước file quá lớn không thể tải lên !");
                this.value = "";
            };
        };
        $("#video-state-button").click(function () {
            $("#video-up").show();
            $("#link-up").hide();
            $("#video-state-button").hide();
            $("#link-state-button").show();
        });
        $("#link-state-button").click(function () {
            $("#video-up").hide();
            $("#link-up").show();
            $("#video-state-button").show();
            $("#link-state-button").hide();
        });

    </script>
    @if(session()->has('message'))
        <script>
            alertify.alert("{{ session()->get('message') }}").set({title: "Tải ảnh lên thành công !"});
        </script>
    @endif
@endpush
