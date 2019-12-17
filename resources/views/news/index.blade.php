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
                {{--               Main section--}}
                <div id="dnn_Detail_Left" class="TNDetailLeft">
                    <div class="DnnModule DnnModule-TNCategorySolution DnnModule-538"><a name="538"></a>
                        <div id="dnn_ctr538_ContentPane"><!-- Start_Module_538 -->
                            <div id="dnn_ctr538_ModuleContent" class="DNNModuleContent ModTNCategorySolutionC">

                                <div style="clear:both;"></div>

                                <div class="header_danhmuc">
                                    <div class="hearder_tab_home">
                                        <a href="/"><i class="fas fa-home" style="font-size: 20px;"></i></a>
                                    </div>
                                    <div class="header_Shape"></div>
                                    <div class="hearder_tab_level1"><a href="{{route('newspost.index')}}">&nbsp;Tin tức
                                            - Sự kiện&nbsp;</a></div>
                                    <div class="header_warp_right"></div>
                                </div>
                                <div style="clear:both;"></div>

                                <div style="clear:both;"></div>


                                <span id="dnn_ctr538_Main_lblMessage" style="clear:both;"></span>


                            </div><!-- End_Module_538 --></div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="DnnModule DnnModule-TNNewsSolution DnnModule-530" id="app">
                        <div id="dnn_ctr530_ContentPane"><!-- Start_Module_530 -->
                            <div id="dnn_ctr530_ModuleContent" class="DNNModuleContent ModTNNewsSolutionC">
                                <div class="tncndemo_wrap">
                                    <div class="contentx">
                                        @if (count($posts) > 0)
                                            @foreach($posts as $index => $post)
                                                @if ($index == 0)
                                                    <div class="xitem first_item"
                                                         style="  background-color: lightblue; width: 680px;height: 197px; overflow: hidden;">
                                                        <a href="#" @click="getContent({{$post->id}})"
                                                           style="display:block;">
                                                            <img class="ximg"
                                                                 alt="{{$post->title}}"
                                                                 src="{{$post->cover_img}}" style="width: 35%">
                                                        </a>
                                                        <h2>
                                                            <a href="#" class="xlink" @click="getContent({{$post->id}})"
                                                               data-target="#post-0">
                                                                {{$post->title}}
                                                            </a>
                                                        </h2>
                                                        <div style="margin:5px 0;">
                                                    <span id="dnn_ctr530_Main_UserNewsCategory_rptObject_Label1_0"
                                                          class="xdate">Cập nhật: </span>
                                                        </div>

                                                        <div style="clear:both;"></div>
                                                    </div>
                                                    <div class="sep"></div>
                                                    <div style="clear:both"></div>
                                                @elseif ($index > 0)
                                                    <div class="xitem"
                                                         style="width: 680px;height: 197px; overflow: hidden;">
                                                        <a href="#" @click="getContent({{$post->id}})" style="display:block;">
                                                            <img class="ximg"
                                                                 alt="{{$post->title}}"
                                                                 src="{{$post->cover_img}}">
                                                        </a>
                                                        <h2>
                                                            <a href="#" class="xlink" @click="getContent({{$post->id}})"
                                                               data-target="#post-{{$index}}">
                                                                {{ $post->title}}
                                                            </a>
                                                        </h2>
                                                    </div>
                                                    <div style="clear:both;"></div>
                                                @endif

                                                <div style="clear:both"></div>
                                                <!-- Modal -->
                                                <div class="modal fade" id="news-modal" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Xem bài
                                                                    viết</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div style="text-align: center;">
                                                                    <img v-bind:src="cover_img" style="width: 300px">
                                                                    <p style="color: #2d5adc">@{{title}}</p>
                                                                </div>

                                                                <div class="content">
                                                                    <p>Cập nhật: @{{ updated_at}}</p>
                                                                    <div v-html="content"></div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-outline-info"
                                                                        data-dismiss="modal">Xong
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                                {{$posts->links()}}
                            </div><!-- End_Module_530 --></div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
                {{--                ! end Main section--}}
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
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                title: '',
                content: '',
                cover_img: '',
                updated_at: '',
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
                    }).catch(function (err) {
                        console.log(err.data);
                    });
                    $('#news-modal').modal('show');
                }
            },
        });
    </script>
@endpush
