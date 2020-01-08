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

        .preview {
            margin: 5px;
            height: 300px;
            width: 281px;
        }
        .image-zoom{
            width: 100%;
            height: 100%;
            max-height: 700px;
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
                        <h1>Thư viện "{{$gallery->title}}" ({{$gallery->images->count()}} ảnh)</h1>
                        <a role="button" href="#" class="btn btn-success" id="add-images" style="display: inline"><i
                                class="fas fa-plus"></i>Thêm ảnh mới vào bộ sưu tập này</a>
                        <a role="button" style="display: inline">
                            <button class="btn btn-danger" id="delete-album"><i class="fas fa-trash-alt"></i>Xóa toàn bộ album này</button>
                        </a>
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
            <div class="card" id="add-image-form" style="display: none">
                <div class="card-header">
                    <hr>
                    <div class="form-group">
                        <form action="{{route('admin.galleries.update',['gallery' => $gallery->slug])}}" method="POST"
                              id="update-form" enctype="multipart/form-data">
                            {{method_field('PUT')}}
                            {{csrf_field()}}
                            <label for="" class="col-md-12 control-label">Chọn ảnh muốn tải lên</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="album[]" id="album" multiple required>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-success" type="button" id="upload"><i
                                            class="fas fa-cloud-upload-alt"></i>Tải
                                        lên
                                    </button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-danger" id="cancel"><i class="fas fa-ban"></i>Hủy</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="form-group">
                        <div id="image_preview"></div>
                    </div>
                </div>
            </div>
            <!-- Default box -->
            <div class="card" id="list-images">
                <div class="card-header">
                    <h3 class="card-title">Danh sách ảnh</h3>

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
                        @foreach($gallery->images as $index => $image)
                            <div class="col-md-4 col-lg-4" id="image-{{$image->id}}">
                                <div class="polaroid">
                                    <img src="{{$image->link}}" alt="Ảnh thứ {{$index+1}}"
                                         style="width:100%;height: 300px" class="myImg">
                                    <div class="container">
                                        {{--                                        <p>Ảnh thứ {{$index+1}}</p>--}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button class="btn btn-success" data-toggle="modal"
                                                        data-target="#image-{{$index}}">Xem
                                                </button>
                                            </div>
                                            <!-- Large modal -->
                                            <div class="modal fade" tabindex="-1" role="dialog" id="image-{{$index}}"
                                                 aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <img src="{{$image->link}}" alt="Ảnh thứ {{$index+1}}" class="image-zoom">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <button class="btn btn-danger" onclick="deleteImage({{$image->id}})" >Xóa</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @if (count($gallery->images) == 0)
                            <div class="col-md-4 col-lg-4">
                                Thư viện này hiện chưa có ảnh nào
                            </div>
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
            alertify.alert("{{ session()->get('message') }}").set({title: "Cập nhật nội dung bài viết thành công "});
        </script>
    @endif
    <script type="text/javascript">
        $("#album").change(function () {
            $('#image_preview').html("");
            var total_file = document.getElementById("album").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#image_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "' class='preview'>");

            }
        });
        $('#add-images').click(function () {
            $('#add-image-form').show();
        });
        $('#cancel').click(function (event) {
            event.preventDefault();
            $('#add-image-form').hide();
        });
        $('#upload').click(function () {
            if ($('#album').get(0).files.length == 0) {
                alert('Hãy thêm ảnh vào trước khi cập nhật album !');
            } else {
                $('#update-form').submit();
            }
        });
        $('#delete-album').click(function(){
            if (confirm('Xóa album ảnh này! Sau khi xóa album không thể khôi phục , bạn có chắc không!')){
                axios.delete('{{route("admin.galleries.destroy",['gallery' => $gallery->slug])}}',{
                }).then(function (res) {
                    window.location.replace("{{route('admin.galleries.index')}}");
                }).catch(function (err) {
                    alert('Có lỗi xảy ra ! Hãy thử lại sau .');
                    console.log(err.data);
                })
            };
        })
        function deleteImage(id) {
            console.log(id);
            axios.delete('/admin/images/' + id,{
            }).then(function (res) {
                $('#image-' + id).hide();
            }).catch(function (err) {
                alert('Co loi xay ra');
                console.log(err.data);
            })
        }
    </script>
@endpush
