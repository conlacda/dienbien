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
                                    <a style="color: white">Thư viện ảnh</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="DnnModule DnnModule-TNNewsSolution DnnModule-540"><a name="540"></a>
                        <div id="dnn_ctr540_ContentPane"><!-- Start_Module_540 -->
                            <div id="dnn_ctr540_ModuleContent" class="DNNModuleContent ModTNNewsSolutionC">


                                <div class="tncnidemo_wrap mid540">
                                    <div class="contentx">
                                        <div id="dnn_ctr540_Main_UserNewsImages_up">

                                            @foreach($galleries as $gallery)
                                                <div class="xitem">
                                                    <div class="xboxitem">
                                                        <a href="{{route('gallery.show',['slug' => $gallery->slug ])}}">
                                                            <div class="ximgdiv"><img class="ximg"
                                                                                      alt="{{$gallery->title}}"
                                                                                      src="{{ count($gallery->images) > 0 ? $gallery->images[0]->link : \App\Image::DEFAULT_ALBUM_IMAGE }}">
                                                            </div>
                                                            <div class="xtitlez">
                                                                <span>{{$gallery->title}} </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach

                                            <div style="clear:both; height:10px;"></div>
                                            <div class="PagingContainer">
                                                {{$galleries->links()}}
                                            </div>

                                        </div>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                                <div style="clear:both"></div>


                                <div style="clear:both"></div>

                                <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        var scop = jQuery(".mid" + '540');
                                        scop.find("img").error(function () {
                                            jQuery(this).attr("src", "/images/tnlogo.png");
                                        });
                                    });
                                </script>


                            </div><!-- End_Module_540 --></div>
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
