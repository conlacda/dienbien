@extends('app')
@push('css')
    <style>
        i {
            font-size: 20px;
            color: white;
        }

        .content {
            background-color: #1a82f7;
            padding: 3px;
        }

        .ximg {
            width: 350px !important;
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
                <div id="dnn_Detail_Left" class="TNDetailLeft">
                    <div class="DnnModule DnnModule-TNCategorySolution DnnModule-538"><a name="538"></a>
                        <div id="dnn_ctr538_ContentPane"><!-- Start_Module_538 -->
                            <div id="dnn_ctr538_ModuleContent" class="DNNModuleContent ModTNCategorySolutionC">
                                <div style="clear:both;"></div>
                                <div class="content">
                                    <i class="fas fa-home"  style="color:white;"></i>
                                    <a style="color: white">Chương trình hỗ trợ</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="DnnModule DnnModule-TNNewsSolution DnnModule-530"><a name="530"></a>
                        <div id="dnn_ctr530_ContentPane"><!-- Start_Module_530 -->
                            <div id="dnn_ctr530_ModuleContent" class="DNNModuleContent ModTNNewsSolutionC">

                                <div class="tncndemo_wrap">
                                    <div class="contentx">
                                        <div class="xitem">
                                            <a href="#" style="display:block;">
                                                <img class="ximg" alt="" src="{{$activity->cover_img}}">
                                            </a>
                                            <h1>
                                                <a href="#" class="xlink" style="font-size: 25px">
                                                    {{$activity->title}}
                                                </a>
                                            </h1>

                                            <span class="xsubject ">
                                                {!! $activity->content!!}
                                            </span>
                                            <div style="clear:both;"></div>
                                        </div>
                                    </div>
                                    <p style="font-style: italic;font-size: 12px">Cập nhật vào: {{$activity->updated_at}}</p>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a href="#">Các bài viết gần đây</a>
                                        </div>
                                        @foreach($relatedActivities as $activity)
                                            <div class="container"
                                                 style="border-radius: 2px;border: 1px solid #ccc!important;margin: 10px 10px 0 10px">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <img style="width: 150px;height: 100px;border: none"
                                                             src="{{$activity->cover_img}}">
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <a href="{{route('activity.slug',['slug' => $activity->slug])}}">{{$activity->title}}</a>
                                                        <div class="summary-hidden1">{!! $activity->content !!}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div><!-- End_Module_530 --></div>
                        <div style="clear:both;"></div>

                    </div>
                </div>
                @include('layouts.right-col')

                <div class="clear">
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
