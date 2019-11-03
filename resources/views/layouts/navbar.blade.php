<div class="TNHeader">
    <div class="TNHeaderTop">
        <div class="TNContent">
            <div id="dnn_Link" class="TNHeadLeft">
                <div class="DnnModule DnnModule-TNHtml DnnModule-515"><a name="515"></a>
                    <div id="dnn_ctr515_ContentPane">
                        <!-- Start_Module_515 -->
                        <div id="dnn_ctr515_ModuleContent" class="DNNModuleContent ModTNHtmlC">
                            <div style="margin:1px 0">
                                <a href="http://www.molisa.gov.vn" target="_blank"
                                   title="Bộ lao động thương binh và xã hội">
                                    <img src="/images/0/HTML/i_ldxh.png">
                                </a>
                            </div>

                            <span id="dnn_ctr515_Main_lblMessage" style="clear: both;"></span>

                        </div>
                        <!-- End_Module_515 -->
                    </div>
                    <div style="clear:both;"></div>
                </div>
            </div>
            <div class="TNHeadRight">
                <div id="dnn_SearchTop" class="TNSearch">
                    <div class="DnnModule DnnModule-TNNewsSolution DnnModule-514"><a name="514"></a>
                        <div id="dnn_ctr514_ContentPane">
                            <!-- Start_Module_514 -->
                            <div id="dnn_ctr514_ModuleContent" class="DNNModuleContent ModTNNewsSolutionC">


                                <div class="form-search">
                                    <label for="tukhoatimkiem" class="placehodercss1"><span
                                            id="dnn_ctr514_Main_UserNewsSearch_label" for="tukhoatimkiem">Nhập từ khóa tìm kiếm ...</span></label>
                                    <input name="dnn$ctr514$Main$UserNewsSearch$txtKeyword" type="text"
                                           id="dnn_ctr514_Main_UserNewsSearch_txtKeyword"
                                           class="txt-search tukhoatimkiem"
                                           onkeydown="return __dnn_KeyDown(&#39;13&#39;, &#39;javascript:__doPostBack(%27dnn$ctr514$Main$UserNewsSearch$_SearchButton%27,%27%27)&#39;, event);"
                                    />
                                    <a id="dnn_ctr514_Main_UserNewsSearch__SearchButton" class="bt-search"
                                       href="javascript:__doPostBack(&#39;dnn$ctr514$Main$UserNewsSearch$_SearchButton&#39;,&#39;&#39;)"></a>
                                </div>


                            </div>
                            <!-- End_Module_514 -->
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
                <div id="dnn_Contact" class="TNContact">
                    <div class="DnnModule DnnModule-TNHtml DnnModule-755"><a name="755"></a>
                        <div id="dnn_ctr755_ContentPane">
                            <!-- Start_Module_755 -->
                            <div id="dnn_ctr755_ModuleContent" class="DNNModuleContent ModTNHtmlC">
                                <style>
                                    .TNVLink {
                                        float: left;
                                        width: 86px;
                                        background: url(/images/0/HTML/topleft_lable.png) bottom left no-repeat;
                                        height: 50px;
                                        padding: 10px;
                                        text-align: center;
                                        position: absolute;
                                        right: 100px
                                    }

                                    .TNVLink a {
                                        color: #d5d5d5;
                                        font-weight: bold;
                                    }

                                    .TNVLink a:hover {
                                        color: #e7d05c
                                    }

                                    .TNVIcon {
                                        float: left;
                                        margin: 10px 0 0 10px;
                                    }

                                    .TNVIcon img {
                                        magin: 5px;
                                        display: inline-block;
                                        float: left
                                    }

                                    .TNVIcon .Langg {
                                        margin: 0 2px
                                    }
                                </style>

                                <div class="TNVIcon">
                                    @if (Auth::check())
                                        <a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false" href="#" style="color: orange">
                                            {{Auth::user()->name}}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            @if (Auth::user()->role == \App\User::ROLE['ADMIN'])
                                                <a class="dropdown-item" href="{{route('admin.index')}}">Trang quản
                                                    trị</a>
                                            @else
                                                <a class="dropdown-item" href="{{route('member.index')}}">Trang quản
                                                    trị</a>
                                            @endif
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                Đăng xuất
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    @else
                                        <a href="/login" style="color: orange">Đăng nhập</a>
                                    @endif
                                </div>

                                <span id="dnn_ctr755_Main_lblMessage" style="clear: both;"></span>

                            </div>
                            <!-- End_Module_755 -->
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
            </div>
            <div class="clear">
            </div>
        </div>
    </div>
    <div class="TNContent">
        <div style="position: relative">
            <div id="dnn_Logo" class="TNLogo">
                <div class="DnnModule DnnModule-TNHtml DnnModule-513"><a name="513"></a>
                    <div id="dnn_ctr513_ContentPane">
                        <!-- Start_Module_513 -->
                        <div id="dnn_ctr513_ModuleContent" class="DNNModuleContent ModTNHtmlC">
                            <a href="/"><img style="margin: 10px 0px;" alt="" src="/images/0/HTML/logo_fb.png"
                                             height="58" width="58"></a>

                            <span id="dnn_ctr513_Main_lblMessage" style="clear: both;"></span>

                        </div>
                        <!-- End_Module_513 -->
                    </div>
                    <div style="clear:both;"></div>
                </div>
            </div>
            <div id="dnn_Menu" class="TNMenu">
                <div class="DnnModule DnnModule-TNCategorySolution DnnModule-516"><a name="516"></a>
                    <div id="dnn_ctr516_ContentPane">
                        <!-- Start_Module_516 -->
                        <div id="dnn_ctr516_ModuleContent" class="DNNModuleContent ModTNCategorySolutionC">

                            <div class="simplemenu">
                                <ul>
                                    <li IconUrl="" Contents="" XTarget="" Role="" class="" catid=""><a href="/">
                                            <i class="fas fa-home"></i></a></li>
                                    <li IconUrl="" Contents="" XTarget="" Role="" class="" catid=""><a href="/">Trang
                                            chủ</a></li>
                                    <li><a href="{{route('introduction.index')}}">Giới thiệu</a>
                                        <ul>
                                            @foreach(\App\Introduction::SLUG as $key => $value)
                                                <li>
                                                    <a href="{{route('introduction.specific',['slug' => $value])}}">{{$key}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="{{route('children.index')}}">Thông tin trẻ em</a>
                                        <ul>
                                            <li><a href="{{route('children.index1')}}">Tổng quan về trẻ em tỉnh Điện
                                                    Biên</a>
                                            </li>
                                            <li><a href="{{route('children.index2')}}">Trẻ em đã được giúp đỡ</a></li>
                                            <li><a href="{{route('children.index3')}}">Trẻ em cần được giúp đỡ</a></li>
                                            <li><a href="{{route('children.index4')}}">Gương sáng trẻ em</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('activity.index')}}">Chương trình hỗ trợ</a>
                                    </li>

                                    <li><a href="{{route('sponsor.index')}}">Nhà tài trợ</a></li>
                                    <li><a href="#contact" data-toggle="modal" data-target="#exampleModalCenter">Liên
                                            hệ</a></li>
                                </ul>
                            </div>
                            <span id="dnn_ctr516_Main_lblMessage" style="clear:both;"></span>
                        </div>
                        <!-- End_Module_516 -->
                    </div>
                    <div style="clear:both;"></div>
                </div>
            </div>
            <div class="clear">
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thông tin liên hệ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Địa chỉ: {{$contact->address}} </p>
                <p>Số điện: {{$contact->phone}}</p>
                <p>Hotline: {{$contact->hotline}}</p>
                <p>Tài khoản Quỹ: {{$contact->bank_account}}</p>
                <p>Đối thoại (Trao đổi) : {{$contact->fb_link}}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
