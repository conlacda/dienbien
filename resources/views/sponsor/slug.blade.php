@extends('app')
@push('css')
    <style>
        .content {
            background-color: #1a82f7;
            padding: 3px;
        }
    </style>
@endpush
@section('content')

    <div class="fmcenter">
        <div class="TNContent">
            <div id="dnn_Top" class="DNNEmptyPane">
            </div>
            <div class="clear">
            </div>
            <div class="TNMain">
                <div id="dnn_Top_1" class="TNTop1 DNNEmptyPane">
                </div>
                <div id="dnn_Top_2" class="TNTop2 DNNEmptyPane">
                </div>
                <div id="dnn_Top_3" class="TNTop3 DNNEmptyPane">
                </div>
                <div class="clear">
                </div>
                <div id="dnn_Middle_1" class="TNMiddle1 DNNEmptyPane">
                </div>
                <div id="dnn_Middle_2" class="TNMiddle2 DNNEmptyPane">
                </div>
                <div class="clear">
                </div>
                <div id="dnn_Detail_Left" class="TNDetailLeft">
                    <div class="DnnModule DnnModule-TNCategorySolution DnnModule-538"><a name="538"></a>
                        <div id="dnn_ctr538_ContentPane"><!-- Start_Module_538 -->
                            <div id="dnn_ctr538_ModuleContent" class="DNNModuleContent ModTNCategorySolutionC">
                                <div style="clear:both;"></div>
                                <div class="content">
                                    <i class="fas fa-home" style="color:white;"></i>
                                    <a style="color: white">Nhà tài trợ </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="DnnModule DnnModule-TNNewsSolution DnnModule-530"><a name="530"></a>
                        <div id="dnn_ctr530_ContentPane"><!-- Start_Module_530 -->
                            <div id="dnn_ctr530_ModuleContent" class="DNNModuleContent ModTNNewsSolutionC">


                                <input type="hidden" name="dnn$ctr530$Main$UserNewsCategory$_PreviewCategoryId"
                                       id="dnn_ctr530_Main_UserNewsCategory__PreviewCategoryId">


                                <div class="tncndemo_wrap">
                                    <div class="contentx">
                                        <div class="row">

                                            <table class="table table-striped"
                                                   style="table-layout: fixed; overflow: scroll">
                                                <tbody>
                                                <tr>
                                                    <td style="width: 20%"></td>
                                                    <td style="width: 80%">
                                                        <img src="{{$sponsor->cover_img}}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 20%">Tên nhà tài trợ</td>
                                                    <td style="width: 80%">{{$sponsor->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Link</td>
                                                    <td>
                                                        <a href="{{$sponsor->link}}">{{substr($sponsor->link,0,50). '...'}}</a>
                                                    </td>
                                                </tr>
                                                @if($sponsor->year != "")
                                                    <tr>
                                                        <td>Thời gian</td>
                                                        <td>{{$sponsor->year}}</td>
                                                    </tr>
                                                @endif
                                                <tr style=" position:relative;overflow: auto;">
                                                    <td style="width: 20%">Giới thiệu</td>
                                                    <td style="width: 80%">
                                                        <div style="overflow: auto;">
                                                            {!! $sponsor->introduction!!}
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{--                                    <iframe src='{{$sponsor->link}}' width='1366px' height='623px' frameborder='0'>fgh.</iframe>--}}
                                    <div style="clear:both;"></div>
                                </div>

                            </div><!-- End_Module_530 --></div>
                        <div style="clear:both;"></div>

                    </div>
                </div>
                @include('layouts.right-col')
                <div class="clear">
                </div>
                <div id="dnn_VideoLeft" class="videoleft DNNEmptyPane">
                </div>
                <div id="dnn_VideoRight" class="videoright DNNEmptyPane">
                </div>
                <div class="clear">
                </div>
                <div id="dnn_VideoHomeTop" class="TNvideotop DNNEmptyPane">
                </div>
                <div class="clear">
                </div>
                <div id="dnn_Video_Left" class="TNVdieoleft DNNEmptyPane">
                </div>
                <div id="dnn_Video_Center" class="TNVideocenter DNNEmptyPane">
                </div>
                <div id="dnn_Video_Right" class="TNVideoright DNNEmptyPane">
                </div>
                <div class="clear">
                </div>
                <div id="dnn_Bottom" class="TNContent DNNEmptyPane">
                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
@endpush
