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
                        <h1>Danh sách các nhà tài trợ</h1>
                        <a role="button" href="{{route('admin.sponsors.create')}}" class="btn btn-success"><i
                                class="fas fa-plus"></i>Thêm nhà tài trợ mới</a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Trang quản lý</a></li>
                            <li class="breadcrumb-item active">Nhà tài trợ</li>
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
                        @foreach($sponsors as $index => $sponsor)
                            <tr>
                                <td>
                                    {{$index+1}}
                                </td>
                                <td>
                                    <a>
                                        {{$sponsor->name}}
                                    </a>
                                    <br>
                                    <small>
                                        Cập nhật vào: {{$sponsor->updated_at}}
                                    </small>
                                </td>
                                <td>
                                    <a href="{{$sponsor->link}}">{{substr($sponsor->link,0,10) . '...'}}</a>
                                </td>
                                <td>
                                    <div class="content-hidden">
                                        {!! $sponsor->introduction!!}
                                    </div>
                                </td>
                                <td>
                                    <img src="{{$sponsor->cover_img}}" width="120px">
                                </td>
                                <td class="project-state">
                                    <a class="btn btn-primary btn-sm" data-toggle="modal"
                                       data-target="#sponsor-{{$sponsor->slug}}" href="#">
                                        <i class="fas fa-folder">
                                        </i>
                                        Xem
                                    </a>
                                    <a class="btn btn-info btn-sm"
                                       href="{{route('admin.sponsors.edit',['sponsor' => $sponsor->slug])}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Sửa
                                    </a>
                                    <a class="btn btn-info btn-sm" href="#"
                                       onclick="event.preventDefault(); document.getElementById('{{"delete-".$sponsor->slug}}').submit();">
                                        <i class="fas fa-trash-alt">
                                        </i>
                                        Xóa
                                    </a>
                                    <form
                                        id={{'delete-'.$sponsor->slug}} action="{{route('admin.sponsors.destroy',['sponsor' => $sponsor->slug])}}"
                                        method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        {{method_field('delete')}}
                                    </form>
                                    <!-- Modal -->
                                    <div class="modal fade" id="sponsor-{{$sponsor->slug}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        id="exampleModalLongTitle">{{$sponsor->name}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="{{$sponsor->cover_img}}" width="200px">
                                                    <p>Trang web</p>
                                                    <a href="//{{$sponsor->link}}">
                                                        {{substr($sponsor->link,0,40). '...'}}
                                                    </a>
                                                    <p>Lời giới thiệu: {!!$sponsor->introduction!!}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a class="btn btn-info btn-sm"
                                                       href="{{route('admin.sponsors.edit',['sponsor' => $sponsor->slug])}}">
                                                        <i class="fas fa-pencil-alt"></i>Sửa
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $sponsors->links() }}
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
