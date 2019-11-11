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
                                    <a style="color: white" href="{{route('gallery.index')}}">Thư viện ảnh</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="DnnModule DnnModule-TNNewsSolution DnnModule-541"><a name="541"></a>
                        <div id="dnn_ctr541_ContentPane"><!-- Start_Module_541 -->
                            <div id="dnn_ctr541_ModuleContent" class="DNNModuleContent ModTNNewsSolutionC">

                                <div class="tnnddemo_wrap">
                                    <div class="newdetailscontent">
                                        <div class="xtext">
                                            <span><h1>{{$gallery->title}}</h1>
                                                <p>{{$gallery->introduction}}</p>
                                            </span>
                                            <div style="margin: 5px 0;">
                                                <span id="dnn_ctr541_Main_UserNewsImageDetail_Label2" class="xdate">Cập nhật vào: {{$gallery->created_at}}</span>
                                            </div>

                                        </div>
                                        <p class="xsubject"></p>
                                        <div class="tinlqduocchon">
                                            <ul>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="xcontents">
                                        @if (count($gallery->images) == 0)
                                            <p>Album ảnh này hiện chưa có ảnh nào !</p>
                                        @else
                                            @foreach($gallery->images as $index => $image)
                                                <a class="xitem xphoto" rel="group1"
                                                   href="/Portals/0/NEWS_IMAGES/minhhanh/2016_4/img_5110.jpg" title="">
                                                    <img style="width:100%;" class="ximg"
                                                         src="{{$image->link}}" alt="">
                                                    <span class="clgt"></span>
                                                </a>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div style="clear:both;height:10px;"></div>
                                    <input type="hidden" name="dnn$ctr541$Main$UserNewsImageDetail$zz"
                                           id="dnn_ctr541_Main_UserNewsImageDetail_zz" value="g:plusone:size='medium'">

                                </div>
                                <div style="clear: both;">
                                </div>


                                <div style="clear: both;"></div>

                                <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        $("a.xitem").fancybox({
                                            'transitionIn': 'none',
                                            'transitionOut': 'none',
                                            'titlePosition': 'over',
                                            'titleFormat': function (title, currentArray, currentIndex, currentOpts) {
                                                return '<span id="fancybox-title-over">' + (title.length ? ' &nbsp; ' + title : '') + '</span>';
                                            }
                                        });
                                        jQuery(function () {
                                            jQuery(window).scroll(function () {
                                                if (jQuery(this).scrollTop() > 100) {
                                                    jQuery('#gototop').fadeIn();
                                                } else {
                                                    jQuery('#gototop').fadeOut();
                                                }
                                            });

                                            // scroll body to 0px on click
                                            jQuery('#gototop').click(function () {
                                                jQuery('body,html').animate({
                                                    scrollTop: 0
                                                }, 800);
                                                return false;
                                            });
                                        });

                                    });
                                </script>


                                <script type="text/javascript">

                                    function ReplaceUrlWithoutReloading(urlserver, urlclient) {
                                        //window.history.pushState({ id: 35 }, 'Viewing item #35', '/item/35');
                                        //window.history.pushState({ id: 1 }, urlclient, urlserver);
                                        window.history.replaceState({id: 1}, urlclient, urlserver);
                                    }
                                </script>


                            </div><!-- End_Module_541 --></div>
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
