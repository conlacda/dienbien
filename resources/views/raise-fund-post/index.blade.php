@extends('app')
@push('css')

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


                                <div class="header_danhmuc">
                                    <div class="hearder_tab_level1" style="height: 30px"><a href="#"><i
                                                class="fas fa-newspaper"></i> {{$title}}</a></div>
                                    <div class="header_warp_right"></div>
                                </div>
                                <div style="clear:both;"></div>


                                <div style="clear:both;"></div>


                                <span id="dnn_ctr538_Main_lblMessage" style="clear:both;"></span>


                            </div><!-- End_Module_538 --></div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="DnnModule DnnModule-TNNewsSolution DnnModule-530"><a name="530"></a>
                        <div id="dnn_ctr530_ContentPane"><!-- Start_Module_530 -->
                            <div id="dnn_ctr530_ModuleContent" class="DNNModuleContent ModTNNewsSolutionC">


                                <input type="hidden" name="dnn$ctr530$Main$UserNewsCategory$_PreviewCategoryId"
                                       id="dnn_ctr530_Main_UserNewsCategory__PreviewCategoryId">


                                <div class="tncndemo_wrap">
                                    <div class="contentx">
                                        @foreach($posts as $post)
                                            <div class="xitem">
                                                {{--                                                <a href="{{$link . '/' . $post->slug}}"--}}
                                                {{--                                                   style="display:block;">--}}
                                                {{--                                                    <img class="ximg"--}}
                                                {{--                                                         alt="{{$post->title}}"--}}
                                                {{--                                                         src="{{$post->cover_img}}">--}}
                                                {{--                                                </a>--}}
                                                <h2>
                                                    <a href="#" data-toggle="modal"
                                                       data-target="#show-post-{{$post->id}}"
                                                       class="xlink">
                                                        {{$post->title}}
                                                    </a>
                                                </h2>
                                                <div style="margin:5px 0;">
                                                <span id="dnn_ctr530_Main_UserNewsCategory_rptObject_Label1_1"
                                                      class="xdate">Cập nhật: </span>
                                                </div>
                                                {{--                                                <span class="xsubject">Sáng ngày 19/9/2019, tại Trường THCS xã Thất Hùng, Quỹ Bảo trợ trẻ em Việt Nam phối hợp với Sở Lao động - Thương binh và Xã hội tỉnh Hải Dương, Ủy ban nhân dân huyện Kinh Môn tổ chức chương trình trao học bổng và xe đạp cho học sinh có hoàn cảnh khó khăn của xã Thất Hùng, huyện Kinh Môn, tỉnh Hải Dương. Tham dự chương trình có đồng chí Hoàng Văn Tiến - Giám đốc Quỹ Bảo trợ trẻ em Việt Nam cùng đại diện Lãnh đạo Sở LĐTBXH, UBND huyện Kinh Môn, UBND xã Thất Hùng và 60 học sinh được nhận học bổng và xe đạp. </span>--}}
                                                <span
                                                    class="xsubject">{!! substr($post->content,0,400) . '...'!!}</span>
                                                <div style="clear:both;"></div>
                                            </div>
                                            <p style="font-style: italic;font-size: 12px">Cập nhật vào
                                                : {{$post->updated_at}}</p>
                                            <hr>
                                            <!-- Modal -->
                                            <div class="modal fade" id="show-post-{{$post->id}}" tabindex="-1"
                                                 role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Bài viết</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h3 style="color: #2d5adc">{{$post->title}}</h3>
                                                            {!! $post->content !!}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Xong
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div style="clear:both;"></div>
                                </div>

                            </div><!-- End_Module_530 --></div>
                        <div style="clear:both;"></div>
                        {{ $posts->links() }}
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
