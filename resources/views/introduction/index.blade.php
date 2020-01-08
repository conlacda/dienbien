@extends('app')
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


                                <div class="header_danhmuc">
                                    <div class="hearder_tab_home">
                                        <a href="/"><i class="fas fa-home" style="font-size: 20px;"></i> </a>
                                    </div>
                                    <div class="header_Shape"></div>
                                    <div class="hearder_tab_level1">
                                        <a href="{{route('introduction.specific',['slug' => \App\Introduction::SLUG_MINI[0]])}}">
                                            Giới thiệu
                                        </a> >
                                        <a href="{{route('introduction.specific',['slug' => $introduction->slug])}}">
                                            {{$introduction->title}}
                                        </a></div>
                                </div>
                                <div style="clear:both;"></div>


                                <div style="clear:both;"></div>


                                <span id="dnn_ctr538_Main_lblMessage" style="clear:both;"></span>


                            </div><!-- End_Module_538 --></div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="DnnModule DnnModule-TNHtml DnnModule-843"><a name="843"></a>
                        <div id="dnn_ctr843_ContentPane"><!-- Start_Module_843 -->
                            <div id="dnn_ctr843_ModuleContent" class="DNNModuleContent ModTNHtmlC">
                                {!! $introduction->content!!}

                                <span id="dnn_ctr843_Main_lblMessage" style="clear: both;"></span>

                            </div><!-- End_Module_843 --></div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
                @include('layouts.right-col')
            </div>
            <div class="clear">
            </div>
        </div>
    </div>
@endsection
