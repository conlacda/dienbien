@extends('app')
@push('css')
    <style>
        .content {
            background-color: #1a82f7;
            padding: 3px;
        }

        .big-video-player {
            margin: 5px;
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
                                    <a style="color: white">Video</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($videos as $video)
                        <div class="row" style="margin-top: 5px">
                            <div class="col-md-8 col-lg-8">
                                <div class="big-video-player">
                                    <video controls="controls" preload="metadata" width="470px" height="250px">
                                        <source src="{{$video->link}}#t=0.5" type="video/mp4">
                                        Trình duyệt không hỗ trợ xem video này
                                    </video>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div style="margin-left: 10px">
                                    <p><i class="fas fa-map-marker-alt"></i> {{$video->place}}</p>
                                    <p>{{$video->note}}</p>
                                    <p style="font-size: 10px">Đăng tải lúc {{$video->created_at}}</p>
                                </div>
                            </div>
                            <p style="padding: 15px;color: blue">{{$video->title}}</p>
                        </div>
                        <hr>
                    @endforeach
                    {{$videos->links()}}
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
