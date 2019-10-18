@extends('admin.app')
@push('css')
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 5px;
            text-align: left;
        }

        .card {
            padding: 0 20px 10px 20px;
        }
        .card-header{
            padding-left: 0 !important;
        }
    </style>
@endpush
@section('content')
    <div class="content-wrapper" style="min-height: 1231.06px;">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 style="display: inline">Thông tin liên hệ</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Trang quản lý</a></li>
                            <li class="breadcrumb-item active">Thông tin liên hệ</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                                title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                    <div>
                        <button class="btn btn-outline-success" type="button" data-toggle="modal"
                                data-target="#edit-form">
                            <i class="fas fa-edit"></i> Chỉnh sửa
                        </button>
                        {{--                    Modal--}}
                        <div class="modal fade" id="edit-form" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Chỉnh sửa thông tin liên hệ</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">

                                        <form role="form">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Địa chỉ</label>
                                                    <input type="email" class="form-control" id="address-u"
                                                           placeholder="Nhập vào địa chỉ"
                                                           value="{{$contactInfo[0]->address}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Số điện thoại</label>
                                                    <input type="text" class="form-control" id="phone-u"
                                                           placeholder="Nhập vào số điện thoại"
                                                           value="{{$contactInfo[0]->phone}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Đường dây nóng</label>
                                                    <input type="text" class="form-control" id="hotline-u"
                                                           placeholder="Nhập vào số đường dây nóng"
                                                           value="{{$contactInfo[0]->hotline}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Tài khoản ngân hàng</label>
                                                    <input type="text" class="form-control" id="backaccount-u"
                                                           placeholder="Nhập vào số tài khoản - chi nhánh ngân hàng"
                                                           value="{{$contactInfo[0]->bank_account}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Địa chỉ facebook</label>
                                                    <input type="text" class="form-control" id="fb_link-u"
                                                           placeholder="Nhập vào đường link facebook"
                                                           value="{{$contactInfo[0]->fb_link}}">
                                                </div>
                                            </div>
                                            <!-- /.box-body -->
                                        </form>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">
                                            Hủy
                                        </button>
                                        <button type="button" class="btn btn-primary" id="update-button">Cập nhật
                                        </button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    </div>
                </div>
                <div class="card-body p-0" style="display: block;">
                    <table style="width:100%">
                        <caption>Thông tin này sẽ được hiển thị tại tab Liên hệ ngoài trang chủ</caption
                        <tr>
                            <td>Địa chỉ</td>
                            <td>{{$contactInfo[0]->address ?? 'Chưa điền'}}</td>
                        </tr>
                        <tr>
                            <td>Số điện thoại</td>
                            <td>{{$contactInfo[0]->phone ?? 'Chưa điền'}}</td>
                        </tr>
                        <tr>
                            <td>Đường dây nóng</td>
                            <td>{{$contactInfo[0]->hotline ?? 'Chưa điền'}}</td>
                        </tr>
                        <tr>
                            <td>Tài khoản ngân hàng</td>
                            <td>{{$contactInfo[0]->bank_account ?? 'Chưa điền'}}</td>
                        </tr>
                        <tr>
                            <td>Địa chỉ facebook</td>
                            <td>{{$contactInfo[0]->fb_link ?? 'Chưa điền'}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('js')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        $('#update-button').click(function () {
            axios.put('{{route('admin.contacts.update',['contact' => $contactInfo[0]->id])}}', {
                'address': $('#address-u').val(),
                'phone': $('#phone-u').val(),
                'hotline': $('#hotline-u').val(),
                'bank_account': $('#backaccount-u').val(),
                'fb_link': $('fb_link-u').val()
            }).then(function (res) {
                $('#edit-form').modal('hide');
                alertify.alert(res.data.message).set({title: "Cập nhật thông tin liên hệ"});
                location.reload();
            }).catch(function (err) {
                $('#edit-form').modal('hide');
                alertify.alert('Có lỗi xảy ra!').set({title: "Cập nhật không thành công"});
            })
        });
    </script>
@endpush
