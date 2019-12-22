@extends('app')
@push('css')
    <link rel="stylesheet" href="/css/index.css">
    <style>
        a {
            font-size: 15px !important;
        }

        .simplemenu ul li a {
            font-size: 12px !important;
        }
    </style>
@endpush
@section('content')

    <div class="aspNetHidden">
        <input type="hidden" name="StylesheetManager_TSSM" id="StylesheetManager_TSSM" value=""/>
        <input type="hidden" name="ScriptManager_TSM" id="ScriptManager_TSM" value=""/>
        <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value=""/>
        <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value=""/>
        <input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value=""/>
        <input type="hidden" name="__VIEWSTATE_CACHEKEY" id="__VIEWSTATE_CACHEKEY"
               value="VS_k0etlxkb00meg0jeh22jf5jz_637039770731848405"/>
        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value=""/>
    </div>
    <div class="fmcenter">
        <div class="TNContent">
            <div id="dnn_Top">
                <div class="DnnModule DnnModule-TNNewsSolution DnnModule-523"><a name="523"></a>
                    <div id="dnn_ctr523_ContentPane">
                        <!-- Start_Module_523 -->
                        <div id="dnn_ctr523_ModuleContent" class="DNNModuleContent ModTNNewsSolutionC">


                            <div class="tnbcns1demo_wrap mid523">

                                <div class="xshower" index="0">
                                    <a>
                                        <img alt="" src="/images/0/NEWS_IMAGES/host/2017_5/vi_quyensongcon_1.png"
                                             class="imgnews"/>
                                    </a>
                                    <div class="xnewsinfo">
                                        <div style="margin:6px;">
                                            <a style="text-decoration:none;"
                                               href="/slide/quyen-song-con_t114c34n339">
                                                <span class="xtitle">Quyền sống còn</span>
                                            </a>
                                            <div style="clear:both;height:8px;"></div>
                                            <span class="xsubject"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="listnews">
                                </div>
                                <div style="clear:both;height:10px;"></div>
                            </div>

                            <div style="clear:both;"></div>


                            <div style="clear:both;"></div>


                        </div>
                        <!-- End_Module_523 -->
                    </div>
                    <div style="clear:both;"></div>
                </div>
            </div>
            <div class="clear">
            </div>
            <div class="TNMain">
                <div id="dnn_Top_1" class="TNTop1">
                    <div class="DnnModule DnnModule-TNHtml DnnModule-849"><a name="849"></a>
                        <div id="dnn_ctr849_ContentPane">
                            <!-- Start_Module_849 -->
                            <div id="dnn_ctr849_ModuleContent" class="DNNModuleContent ModTNHtmlC">

                                <div class="tnnewscate2_nochild">
                                    <div class="xcate">
                                        <div class="xparent">
                                            <div class="xlink">
                                                <span>Bảng vàng tài trợ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="xhitem">
                                        <ul>
                                            <li>
                                                <a href="{{route('sponsor.index')}}">Các nhà tài trợ của chúng
                                                    tôi</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <span id="dnn_ctr849_Main_lblMessage" style="clear: both;"></span>

                            </div>
                            <!-- End_Module_849 -->
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
                <div id="dnn_Top_2" class="TNTop2">
                    <div class="DnnModule DnnModule-TNHtml DnnModule-838"><a name="838"></a>
                        <div id="dnn_ctr838_ContentPane">
                            <!-- Start_Module_838 -->
                            <div id="dnn_ctr838_ModuleContent" class="DNNModuleContent ModTNHtmlC">

                                <div class="tnnewscate2_nochild">
                                    <div class="xcate">
                                        <div class="xparent">
                                            <div class="xlink">
                                                <span>Thông tin trẻ em</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="xhitem">
                                        <ul>
                                            <li><a href="{{route('raise-fund-news.index',['type' => 'admin'])}}">Tin
                                                    tức về trẻ em</a></li>
                                            <li><a href="{{route('raise-fund-news.index',['type' => 'member'])}}">Bài
                                                    đăng gây quỹ từ người dùng</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <span id="dnn_ctr838_Main_lblMessage" style="clear: both;"></span>

                            </div>
                            <!-- End_Module_838 -->
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
                <div id="dnn_Top_3" class="TNTop3">
                    <div class="DnnModule DnnModule-TNHtml DnnModule-839"><a name="839"></a>
                        <div id="dnn_ctr839_ContentPane">
                            <!-- Start_Module_839 -->
                            <div id="dnn_ctr839_ModuleContent" class="DNNModuleContent ModTNHtmlC">

                                <div class="tnnewscate2_nochild">
                                    <div class="xcate">
                                        <div class="xparent">
                                            <div class="xlink">
                                                <span>Thông tin liên hệ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="zhitem">
                                        <ul>
                                            <li><a href="tel:{{$contact->phone}}">Số điện
                                                    thoai: {{$contact->phone}}</a></li>
                                            <li><a href="{{$contact->fb_link}}" target="_blank">Đường link
                                                    facebook</a></li>
                                            <li><a href="mailto:{{$contact->email}}">Email: {{$contact->email}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <span id="dnn_ctr839_Main_lblMessage" style="clear: both;"></span>

                            </div>
                            <!-- End_Module_839 -->
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
                <div class="clear">
                </div>
                <div id="dnn_Middle_1" class="TNMiddle1">
                    <div class="DnnModule DnnModule-TNNewsSolution DnnModule-848"><a name="848"></a>
                        <div id="dnn_ctr848_ContentPane">
                            <!-- Start_Module_848 -->
                            <div id="dnn_ctr848_ModuleContent" class="DNNModuleContent ModTNNewsSolutionC">


                                <input type="hidden"
                                       name="dnn$ctr848$Main$UserNewsView_TaikhoanTiepnhan$_PreviewCategoryId"
                                       id="dnn_ctr848_Main_UserNewsView_TaikhoanTiepnhan__PreviewCategoryId"/>

                                <div class="xtaitro">
                                    <div class="xleft" style="background: #0073b9"
                                         onclick="showDialog('myoverlayAdminform', 'mypopupAdminform');">
                                        <span id="dnn_ctr848_Main_UserNewsView_TaikhoanTiepnhan_Label111"
                                              style="cursor:pointer">Tài khoản tiếp nhận</span>
                                    </div>
                                    <div class="xright">
                                        <marquee behavior="scroll" direction="left" scrolldelay="200"><span
                                                id="dnn_ctr848_Main_UserNewsView_TaikhoanTiepnhan_Label110">Tài khoản ngân hàng : 3761.0.1113493.91012 Kho bạc nhà nước tỉnh Điện Biên</span>
                                        </marquee>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div style="clear:both"></div>
                                <div id="puzone" class="myoverlay myoverlayAdminform" style="display: none;">
                                    <div id="adminform" class="mypopup mypopupAdminform"
                                         style="width: 500px; height: auto; display: none;">
                                        <img
                                            onclick="javascript:closeDialog('myoverlayAdminform', 'mypopupAdminform');"
                                            class="cssButtonClose" src="/images/navigate/images/close.png" alt=""
                                            style="float: right; margin-top: 5px; cursor: pointer;"/>

                                        <div class="xcontent" style="padding:10px;">
                                            <h2 class="xheader"><span
                                                    id="dnn_ctr848_Main_UserNewsView_TaikhoanTiepnhan_Label112">Thông tin tài khoản tiếp nhận</span>
                                            </h2>
                                            <span class="xtitle">
                <span id="dnn_ctr848_Main_UserNewsView_TaikhoanTiepnhan_Label1">Tài khoản tiền Việt: </span><span
                                                    class="xtext">001.0.00.0000355</span><br/>
                                                <span id="dnn_ctr848_Main_UserNewsView_TaikhoanTiepnhan_Label2">Tài khoản ngoại tệ: </span><span
                                                    class="xtext">001.0.37.0002165</span><br/>
                                                <span id="dnn_ctr848_Main_UserNewsView_TaikhoanTiepnhan_Label3">Sở giao dịch:</span><span
                                                    id="dnn_ctr848_Main_UserNewsView_TaikhoanTiepnhan_Label4"
                                                    class="xtext">Ngân hàng Thương mại cổ phần Ngoại thương Việt Nam</span>
                                                </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End_Module_848 -->
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="DnnModule DnnModule-TNHtml DnnModule-861"><a name="861"></a>
                        <div id="dnn_ctr861_ContentPane">
                            <!-- Start_Module_861 -->
                            <div id="dnn_ctr861_ModuleContent" class="DNNModuleContent ModTNHtmlC">
                                <p><img src="/images/0/banner%201.1.jpg" style="width: 630px; height: 126px;"></p>

                                <span id="dnn_ctr861_Main_lblMessage" style="clear: both;"></span>

                            </div>
                            <!-- End_Module_861 -->
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="DnnModule DnnModule-TNNewsSolution DnnModule-535"><a name="535"></a>
                        <div id="dnn_ctr535_ContentPane">
                            <!-- Start_Module_535 -->
                            <div id="dnn_ctr535_ModuleContent" class="DNNModuleContent ModTNNewsSolutionC">


                                <div mid="535" class="tnnewscate3_nochild">
                                    <div class="xcate">
                                        <div class="xparent">
                                            <div class="xlink">
                                                <a href="{{route('newspost.index')}}"><span>Tin tức - Sự kiện</span></a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="clear"></div>
                                    <div class="xnews">
                                        <div class="xleft">
                                            <div style="padding:10px;">
                                                {{--  Nội dung tin tức - sự kiện cột trái , dưới là cột phải--}}
                                                @if (count($news)>=1 )
                                                    <div class="imgnews">
                                                        <a href="#" data-toggle="modal"
                                                           data-target="#post-{{$news[0]->id}}">
                                                            <img alt="{{$news[0]->title}}"
                                                                 src="{{$news[0]->cover_img}}"
                                                                 style="height: 200px;width: 295px"/>
                                                        </a>
                                                    </div>
                                                    <h2 class="xtitle">
                                                        <a href="#" title="" data-toggle="modal"
                                                           data-target="#post-{{$news[0]->id}}">
                                                            <div class="title-hidden">
                                                                {!! $news[0]->title !!}
                                                            </div>
                                                        </a>
                                                    </h2>
                                                    {{--  -----------------}}
                                                    <div class="modal fade" id="post-{{$news[0]->id}}" tabindex="-1"
                                                         role="dialog" aria-labelledby="exampleModalLabel"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        Nội dung bài viết</h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <img src="{{$news[0]->cover_img}}">
                                                                    <p style="color: #2d5adc">{{$news[0]->title}}</p>
                                                                    {!! $news[0]->content !!}
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Xong
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--                                                    ----}}
                                                    <div class="summary-hidden xdes">
                                                        {!! $news[0]->content !!}
                                                    </div>

                                                @endif
                                            </div>
                                        </div>
                                        <div class="xright" id="app">
                                            @if (count($news) > 1)
                                                @foreach($news as $post)
                                                    <div class="xitem">
                                                        <h2 class="xlink">
                                                            <a title="#" @click="getContent({{$post->id}})"
                                                               data-target="#post1-{{$post->id}}"
                                                               style="cursor: pointer;">
                                                                {{$post->title}}
                                                            </a>
                                                        </h2>
                                                    </div>
                                                @endforeach
                                            @endif
                                            {{--  Modal xxxx-----------}}
                                            <div class="modal fade" id="news-modal" tabindex="-1"
                                                 role="dialog" aria-labelledby="exampleModalLabel"
                                                 aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Nội dung bài viết</h5>
                                                            <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div style="text-align: center;">
                                                                <img v-if="!loaded" src="http://doanla.test/images/loading.gif" style="width: 20%">
                                                                <img v-bind:src="cover_img">
                                                                <p style="color: #2d5adc">@{{title}}</p>
                                                            </div>
                                                            <div v-html="content" style="overflow: scroll"></div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Xong
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--                                                        --}}


                                        </div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </div>

                                <div style="clear: both;"></div>


                                <div style="clear: both;"></div>

                            </div>
                            <!-- End_Module_535 -->
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="DnnModule DnnModule-TNHtml DnnModule-562"><a name="562"></a>
                        <div id="dnn_ctr562_ContentPane">
                            <!-- Start_Module_562 -->
                            <div id="dnn_ctr562_ModuleContent" class="DNNModuleContent ModTNHtmlC">
                                <p style="background-color: #d2d2b2">Mọi cá nhân, tổ chức quan tâm đến quỹ xin vui
                                    lòng liên hệ fanpage
                                    <a href="https://www.facebook.com/Qu%E1%BB%B9-B%E1%BA%A3o-tr%E1%BB%A3-tr%E1%BA%BB-em-t%E1%BB%89nh-%C4%90i%E1%BB%87n-Bi%C3%AAn-456115844746109/"
                                       target="_blank">tại
                                        đây</a>
                                    <br>Hotline: 0982356433
                                    <br>Chúng tôi xin chân thành cảm ơn.
                                </p>

                                <span id="dnn_ctr562_Main_lblMessage" style="clear: both;"></span>

                            </div>
                            <!-- End_Module_562 -->
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="DnnModule DnnModule-TNNewsSolution DnnModule-517"><a name="517"></a>
                        <div id="dnn_ctr517_ContentPane">
                            <!-- Start_Module_517 -->
                            <div id="dnn_ctr517_ModuleContent" class="DNNModuleContent ModTNNewsSolutionC">


                                <div mid="517" class="tnalbum_gwrap">
                                    <div class="xcate">
                                        <div class="xparent">
                                            <div class="xlink">
                                                <a href="{{route('gallery.index')}}"><span
                                                        id="dnn_ctr517_Main_UserNewsBoxImages__MainCategoryName">Thư viện ảnh</span></a>
                                            </div>
                                        </div>
                                        <div id="dnn_ctr517_Main_UserNewsBoxImages__DanhMucCon">

                                            <div class="childtab childtab517" style="display:none;">
                                                <ul>

                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="buttons">
                                        {{--                                        <a href="#" id="prev">prev</a>--}}
                                        <div class="xcontent">
                                            <div id="carousel">
                                                <div id="slides">
                                                    <ul>
                                                        @foreach($galleries as $gallery)
                                                            <li>
                                                                <div class="imgnews">
                                                                    <a href="{{route('gallery.show',['slug' => $gallery->slug])}}"
                                                                       title="{{$gallery->slug}}">
                                                                        <img style="width: 129px;height: 86px"
                                                                             alt="Chùm ảnh: {{$gallery->title}} "
                                                                             src="{{$gallery->images[0]->link}}"/>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        {{--                                        <a href="#" id="next">next</a>--}}
                                        <div style="clear: both;"></div>
                                    </div>
                                </div>

                                <div style="clear: both;"></div>

                                <div style="clear: both;">
                                </div>

                            </div>
                            <!-- End_Module_517 -->
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
                <div id="dnn_Middle_2" class="TNMiddle2">
                    <div>
                        <div class='my-title' style="background: #0073b9">
                            <a href="{{route('video.index')}}" style="color: white">
                                VIDEO
                            </a>
                        </div>
                        @if(count($videos) == 0)
                            <p>Chưa có video nào </p>
                        @else
                            {{--                            <div class="video-play">--}}
                            {{--                                <video width="320" height="240" controls>--}}
                            {{--                                    <source src="{{$videos[0]->link}}" type="video/mp4">--}}
                            {{--                                    Your browser does not support the video tag.--}}
                            {{--                                </video>--}}
                            {{--                            </div>--}}
                            @if (substr($videos[0]->link,0,7) == "<iframe")
                                <div style="width: 100%;">
                                    {!! \App\Helpers\VideoHelper::iframeHTML($videos[0]->link) !!}
                                </div>
                            @else
                                <video width="100%" controls>
                                    <source src="{{$videos[0]->link}}" type="video/mp4">
                                </video>
                            @endif
                        @endif
                    </div>
                    {{--                        Chương trình đã tổ chức--}}

                    <div class="DnnModule DnnModule-TNNewsSolution DnnModule-524"><a name="524"></a>
                        <div id="dnn_ctr524_ContentPane"><!-- Start_Module_524 -->
                            <div id="dnn_ctr524_ModuleContent" class="DNNModuleContent ModTNNewsSolutionC">


                                <div mid="524" class="tnnewscate1_nochild">
                                    <div class="xcate" style="background: #0073b9">
                                        <div class="xparent">
                                            <div class="xlink">
                                                <a href="{{route('activity.index')}}"><span>Chương trình đã thực hiện</span></a>
                                            </div>
                                        </div>
                                        <div id="dnn_ctr524_Main_UserNewsBoxCategory_vs3_NoChild1__DanhMucCon">

                                        </div>
                                    </div>
                                    <div class="xnews">
                                        @foreach($activities as $activity)
                                            <div class="xitem">
                                                <div class="imgnews">
                                                    <a href="#" data-toggle="modal"
                                                       data-target="#activity-{{$activity->id}}"
                                                       title="{{$activity->title}}">
                                                        <img
                                                            alt="{{$activity->title}}"
                                                            src="{{$activity->cover_img}}">
                                                    </a>
                                                </div>
                                                <h2 class="xlink">
                                                    <a href="#" data-toggle="modal"
                                                       data-target="#activity-{{$activity->id}}"
                                                       title="{{$activity->title}}">
                                                        {{$activity->title}}
                                                    </a>
                                                </h2>
                                                <div style="clear: both;"></div>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="activity-{{$activity->id}}" tabindex="-1"
                                                 role="dialog" aria-labelledby="exampleModalLabel"
                                                 aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="exampleModalLabel">{{$activity->title}}</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="offset-md-3 col-md-6">
                                                                <img src="{{$activity->cover_img}}"
                                                                     style="width: 400px">
                                                            </div>
                                                            {!! $activity->content !!}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Xong
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end Modal -->
                                        @endforeach
                                    </div>
                                </div>
                                <div style="clear: both;"></div>
                                <div style="clear: both;"></div>
                            </div><!-- End_Module_524 --></div>
                        <div style="clear:both;"></div>
                    </div>


                    {{-- !! Chương trình đã tổ chức End--}}
                    <div class="DnnModule DnnModule-TNNewsSolution DnnModule-752">
                        <div id="dnn_ctr752_ContentPane">
                            <!-- Start_Module_752 -->
                            <div id="dnn_ctr752_ModuleContent" class="DNNModuleContent ModTNNewsSolutionC">


                                <div class="tnbcndemo_wrap">
                                    <div class="xheader">
                                        <div class="xlink">
                                            <a href="/van-ban_t122c30">
                                                <span
                                                    id="dnn_ctr752_Main_UserTaiLieuList_lbTitleDocument">Văn bản</span>
                                            </a>
                                            <select name="dnn$ctr752$Main$UserTaiLieuList$_LoaiVanBan"
                                                    onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;dnn$ctr752$Main$UserTaiLieuList$_LoaiVanBan\&#39;,\&#39;\&#39;)&#39;, 0)"
                                                    id="dnn_ctr752_Main_UserTaiLieuList__LoaiVanBan"
                                                    class="text-box"
                                                    style="display: none;">
                                                <option selected="selected" value=""></option>

                                            </select>
                                        </div>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="gmaincontent">
                                        <div id="dnn_ctr752_Main_UserTaiLieuList_up">

                                            <div id="dnn_ctr752_Main_UserTaiLieuList_UpdateProgress1"
                                                 style="display:none;">

                                                <div class="ui-widget-overlay" style="text-align: center; position: fixed; top: 0px;
                            left: 0px; width: 1600px; height: 1200px; z-index: 1001;">
                                                    <img alt="Dang tai..."
                                                         style="position: fixed; top: 250px; left: 50%;"
                                                         src="/images/navigate/images/progressbar.gif"/>
                                                    <img alt="Dang tai..."
                                                         style="position: fixed; top: 250px; left: 50%;"
                                                         src="/images/navigate/images/progressbar.gif"/><img
                                                        alt="Dang tai..."
                                                        style="position: fixed; top: 250px; left: 50%;"
                                                        src="/images/navigate/images/progressbar.gif"
                                                    /></div>

                                            </div>


                                            <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td style="width: 105px; display: none;">
                                                            <span style="margin-left: 10px;">
                                <span id="dnn_ctr752_Main_UserTaiLieuList_Label6">Lĩnh vực văn bản</span></span>
                                                    </td>
                                                    <td style="text-align: right; display: none;">
                                                        <select
                                                            name="dnn$ctr752$Main$UserTaiLieuList$_LinhVucVanBan"
                                                            onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;dnn$ctr752$Main$UserTaiLieuList$_LinhVucVanBan\&#39;,\&#39;\&#39;)&#39;, 0)"
                                                            id="dnn_ctr752_Main_UserTaiLieuList__LinhVucVanBan"
                                                            class="NormalTextBox"
                                                            style="width:260px;">
                                                            <option selected="selected" value="">---Tất cả lĩnh
                                                                vực---
                                                            </option>

                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="display: none;">
                                                            <span>
                                <span id="dnn_ctr752_Main_UserTaiLieuList_Label7">Số văn bản</span></span>
                                                    </td>
                                                    <td style="display: none;">
                                                        <input name="dnn$ctr752$Main$UserTaiLieuList$txtSymbol"
                                                               type="text"
                                                               id="dnn_ctr752_Main_UserTaiLieuList_txtSymbol"
                                                               style="width:250px;"/>
                                                    </td>
                                                    <td style="display: none;">
                                                            <span style="margin-left: 10px;"><span>
                                <span id="dnn_ctr752_Main_UserTaiLieuList_Label8">Trích yếu</span></span>
                                                            </span>
                                                    </td>
                                                    <td style="text-align: right; display: none">
                                                        <input name="dnn$ctr752$Main$UserTaiLieuList$_Keyword"
                                                               type="text"
                                                               id="dnn_ctr752_Main_UserTaiLieuList__Keyword"
                                                               style="width:250px;"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="display: none;">
                                                            <span>
                                <span id="dnn_ctr752_Main_UserTaiLieuList_Label9">Nơi ban hành</span></span>
                                                    </td>
                                                    <td style="display: none;">
                                                        <select name="dnn$ctr752$Main$UserTaiLieuList$_NoiBanHanh"
                                                                onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;dnn$ctr752$Main$UserTaiLieuList$_NoiBanHanh\&#39;,\&#39;\&#39;)&#39;, 0)"
                                                                id="dnn_ctr752_Main_UserTaiLieuList__NoiBanHanh"
                                                                class="text-box"
                                                                style="width: 260px;">
                                                            <option selected="selected" value="">---Tất cả nơi ban h&#224;nh---</option>

                                                        </select>
                                                    </td>
                                                    <td style="display: none;">
                                                            <span style="margin-left: 10px;">
                                <span id="dnn_ctr752_Main_UserTaiLieuList_Label10">Năm ban hành</span></span>
                                                    </td>
                                                    <td style="text-align: right; display: none">
                                                        <input name="dnn$ctr752$Main$UserTaiLieuList$_NamBanHanh"
                                                               type="text"
                                                               id="dnn_ctr752_Main_UserTaiLieuList__NamBanHanh"
                                                               style="width:173px;"/>
                                                        <input type="submit"
                                                               name="dnn$ctr752$Main$UserTaiLieuList$Button1"
                                                               value=""
                                                               id="dnn_ctr752_Main_UserTaiLieuList_Button1"
                                                               class="cssinputSearch smallsearch" style="width: 50px; margin-left: 18px;
                                margin-right: 2px; text-align: center;"/>
                                                    </td>
                                                </tr>
                                            </table>
                                            <input type="hidden" name="dnn$ctr752$Main$UserTaiLieuList$_DanhMucID"
                                                   id="dnn_ctr752_Main_UserTaiLieuList__DanhMucID" value="30"/>
                                            <div style="clear: both;">
                                            </div>

                                        </div>
                                    </div>
                                    {{--                                        xxxxxxxxxxxxxxxxxxxxxxxxx--}}
                                    <div class="document-list">
                                        <ul>
                                            @foreach($documents as $document)
                                                <li><i class="fas fa-stream"></i><a href="{{$document->link}}"
                                                                                    download>{{$document->title}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div style="clear: both;"></div>
                                    <input type="hidden" name="dnn$ctr752$Main$UserTaiLieuList$hdid"
                                           id="dnn_ctr752_Main_UserTaiLieuList_hdid"/>
                                    <input type="hidden" name="dnn$ctr752$Main$UserTaiLieuList$hdids"
                                           id="dnn_ctr752_Main_UserTaiLieuList_hdids"/>
                                </div>
                                <div style="clear: both;"></div>


                            </div>
                            <!-- End_Module_752 -->
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="DnnModule DnnModule-TNHtml DnnModule-862"><a name="862"></a>
                        <div id="dnn_ctr862_ContentPane">
                            <!-- Start_Module_862 -->
                            <div id="dnn_ctr862_ModuleContent" class="DNNModuleContent ModTNHtmlC">

                                <span id="dnn_ctr862_Main_lblMessage" style="clear: both;"></span>

                            </div>
                            <!-- End_Module_862 -->
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="DnnModule DnnModule-TNHtml DnnModule-876"><a name="876"></a>
                        <div id="dnn_ctr876_ContentPane">
                            <!-- Start_Module_876 -->
                            <div id="dnn_ctr876_ModuleContent" class="DNNModuleContent ModTNHtmlC">

                                <span id="dnn_ctr876_Main_lblMessage" style="clear: both;"></span>

                            </div>
                            <!-- End_Module_876 -->
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
                <div id="dnn_Bottom" class="TNContent">
                    <div class="DnnModule DnnModule-TNHtml DnnModule-873"><a name="873"></a>
                        <div id="dnn_ctr873_ContentPane">
                            <!-- Start_Module_873 -->
                            <div id="dnn_ctr873_ModuleContent" class="DNNModuleContent ModTNHtmlC">
                                <p style="text-align: left;"><img
                                        src="/images/0/Banner%20FANPAGE%2040CM%20X%2096%20CM.jpg"
                                        style="width: 960px; height: 139px;"></p>

                                <span id="dnn_ctr873_Main_lblMessage" style="clear: both;"></span>

                            </div>
                            <!-- End_Module_873 -->
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    {{-- Nhà tài trợ--}}
                    <div class="DnnModule DnnModule-TNHtml DnnModule-837"><a name="837"></a>
                        <div id="dnn_ctr837_ContentPane"><!-- Start_Module_837 -->
                            <div id="dnn_ctr837_ModuleContent" class="DNNModuleContent ModTNHtmlC">
                                <div class="tnalbum_gwrap">
                                    <div class="xcate">
                                        <div class="xparent">
                                            <div class="xlink">
                                                <a tabindex="0" href="/nhà-tài-trợ"><span>Nhà Tài trợ</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div style="clear:both"></div>
                                    <div id="amazon_scroller3" class="amazon_scroller"
                                         style="border: 0px solid black; padding: 0px; width: 960px; height: 102px; position: relative;">
                                        <div class="amazon_scroller_mask" style="width: 900px; height: 102px;">
                                            <ul style="width: 1950px; position: absolute; left: 0px;"
                                                id="sponsor-list">
                                                @foreach($sponsors->chunk(6) as $index => $chunk)
                                                    @foreach($chunk as $sponsor)
                                                        <li style="width: 140px; display: block;"
                                                            class="sponsor-{{$index}}">
                                                            <a href="{{route('sponsor.slug',['slug' => $sponsor->slug])}}"
                                                               tabindex="0"
                                                               target="_blank" title="{{$sponsor->name}}"
                                                               style="color: rgb(12, 103, 151); font-size: 0px;"><img
                                                                    src="{{$sponsor->cover_img}}"
                                                                    style="width: 140px; height: 100px;">
                                                            </a></li>
                                                    @endforeach
                                                @endforeach
                                                <br>
                                            </ul>
                                        </div>

                                        <div style="clear: both;"></div>
                                    </div>
                                    <div style="clear: both;"></div>
                                </div>

                                <span id="dnn_ctr837_Main_lblMessage" style="clear: both;"></span>

                            </div><!-- End_Module_837 --></div>
                        <div style="clear:both;"></div>
                    </div>
                    {{-- ! Nhà tài trợ--}}
                    <div class="DnnModule DnnModule-TNHtml DnnModule-875"><a name="875"></a>
                        <div id="dnn_ctr875_ContentPane">
                            <!-- Start_Module_875 -->
                            <div id="dnn_ctr875_ModuleContent" class="DNNModuleContent ModTNHtmlC">
                                <p style="text-align: center;">&nbsp;</p>
                                <p style="text-align: center;">&nbsp;</p>
                                <p style="text-align: center;">&nbsp;</p>
                            </div>
                            <!-- End_Module_875 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        $(document).ready(function () {
            // setInterval(function(){ alert("Hello"); }, 3000);
            var sponsor_number = {{count($sponsors)}};
            var slide_number = Math.trunc(sponsor_number / 6);

            let index = 0;
            setInterval(function () {
                $(".sponsor-" + index).hide();
                index += 1;
                if (index > slide_number) index = 0;
                $(".sponsor-" + index).show();
            }, 5000);
            $('#news-modal').on('hide.bs.modal', function (e) {
                app.title = 'Loading ...';
                app.content = '';
                app.cover_img = '';
                app.loaded = false;
                //<img src="http://doanla.test/images/loading.gif">
            })
        });
        var app = new Vue({
            el: '#app',
            data: {
                title: '',
                content: '',
                cover_img: '',
                loaded: false,
            },
            methods: {
                getContent: function (id) {
                    axios.post('/ajax/post/' + id, {}).then(function (res) {
                        if (res.data.message != 'ok') {
                            app.title = "Không tìm thấy bài viết"
                        } else {
                            app.title = res.data.title;
                            app.content = res.data.content;
                            app.cover_img = res.data.cover_img;
                        }
                        app.loaded = true;
                    }).catch(function (err) {
                        console.log(err.data);
                    });
                    $('#news-modal').modal('show');
                }
            },
        });
    </script>
@endpush
