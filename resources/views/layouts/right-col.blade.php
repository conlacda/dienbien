<div id="dnn_Detail_Right" class="TNDetailRight">
    <div class="DnnModule DnnModule-TNNewsSolution DnnModule-547"><a name="547"></a>
        <div id="dnn_ctr547_ContentPane"><!-- Start_Module_547 -->
            <div id="dnn_ctr547_ModuleContent" class="DNNModuleContent ModTNNewsSolutionC">

            </div><!-- End_Module_547 --></div>
    </div>
    <div class="DnnModule DnnModule-TNHtml DnnModule-570"><a name="570"></a>
        <div id="dnn_ctr570_ContentPane"><!-- Start_Module_570 -->
            <div id="dnn_ctr570_ModuleContent" class="DNNModuleContent ModTNHtmlC">
                <style>
                    .tnnewscate2_nochild .yhitem {
                        padding: 10px 10px 5px 10px;
                        background: #EDECEC;
                        overflow: hidden;
                    }

                    .tnnewscate2_nochild .yhitem span {
                        font: normal 13px/26px Open Sans Semibold;
                        color: #0073b9;
                        display: block
                    }
                </style>
                <div class="tnnewscate2_nochild">
                    <div class="xcate">
                        <div class="xparent">
                            <div class="xlink">
                                <span>Tài khoản tiếp nhận</span>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="yhitem">
     <span>
      TK ngân hàng: 3761.0.1113493.91012<br>
      Tại: Kho bạc nhà nước tỉnh Điện Biên<br>
     </span>
                    </div>
                </div>

                <span id="dnn_ctr570_Main_lblMessage" style="clear: both;"></span>

            </div><!-- End_Module_570 --></div>
        <div style="clear:both;"></div>
    </div>
    <div class="DnnModule DnnModule-TNHtml DnnModule-838"><a name="838"></a>
        <div id="dnn_ctr838_ContentPane"><!-- Start_Module_838 -->
            <div id="dnn_ctr838_ModuleContent" class="DNNModuleContent ModTNHtmlC">
                <style>
                    .tnnewscate2_nochild .xhitem {
                        padding: 10px 10px 5px 10px;
                        background: #EDECEC;
                        height: 115px;
                        overflow: hidden;
                    }

                    .tnnewscate2_nochild .xhitem ul li {
                        display: block;

                    }

                    .tnnewscate2_nochild .xhitem ul li a {
                        font: normal 13px/28px Open Sans Semibold;
                        color: #0073b9;
                        margin-left: 12px;
                        display: block
                    }

                    .tnnewscate2_nochild .xhitem ul li a:hover {
                        color: #666
                    }
                </style>

                <span id="dnn_ctr838_Main_lblMessage" style="clear: both;"></span>

            </div><!-- End_Module_838 --></div>
        <div style="clear:both;"></div>
    </div>

{{--    --}}
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
                                                <img src="{{$activity->cover_img}}" style="width: 400px">
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
    <div class="DnnModule DnnModule-TNHtml DnnModule-862"><a name="862"></a>
        <div id="dnn_ctr862_ContentPane"><!-- Start_Module_862 -->
            <div id="dnn_ctr862_ModuleContent" class="DNNModuleContent ModTNHtmlC">
                <a href="/ban-tin-noi-bo_t109c26" target="_blank"></a>

                <span id="dnn_ctr862_Main_lblMessage" style="clear: both;"></span>

            </div><!-- End_Module_862 --></div>
        <div style="clear:both;"></div>
    </div>
</div>
