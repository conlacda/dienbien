<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.index')}}" class="brand-link">
        <img src="/images/0/HTML/f_logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Trang quản trị</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                {{--                    <li class="nav-header">EXAMPLES</li>--}}
                <li class="nav-item">
                    <a href="{{route('admin.introductions.index')}}"
                       class="nav-link {{ App\Helpers\RouteHelper::isActiveRoute('introductions') }}">
                        <i class="fas fa-book-open"></i>
                        <p>
                            Giới thiệu
                        </p>
                    </a>
                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link {{ App\Helpers\RouteHelper::isActiveRoute('children') }}">
                        <i class="fas fa-child"></i>
                        <p>
                            Thông tin trẻ em
                            <i class="fas fa-angle-left right"></i>
                            {{--<span class="badge badge-info right">6</span>--}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style='{{ App\Helpers\RouteHelper::isActiveRoute('children')=="" ?  "display: none;" : "display: block;"}}'>
                        <li class="nav-item">
                            <a href="{{route('admin.children1s.index')}}" class="nav-link {{ App\Helpers\RouteHelper::isActiveRoute('children1s') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trẻ em tỉnh Điện Biên</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.children2s.index')}}" class="nav-link {{ App\Helpers\RouteHelper::isActiveRoute('children2s') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trẻ em cần được giúp đỡ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.children3s.index')}}" class="nav-link {{ App\Helpers\RouteHelper::isActiveRoute('children3s') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trẻ em đã được giúp đỡ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.children4s.index')}}" class="nav-link {{ App\Helpers\RouteHelper::isActiveRoute('children4s') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Gương sáng trẻ em</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="{{route('admin.activities.index')}}" class="nav-link {{ App\Helpers\RouteHelper::isActiveRoute('activities') }}">
                        <i class="fas fa-american-sign-language-interpreting"></i>
                        <p>
                            Chương trình hỗ trợ
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.sponsors.index')}}" class="nav-link {{ App\Helpers\RouteHelper::isActiveRoute('sponsor') }}">
                        <i class="fas fa-users"></i>
                        <p>
                            Nhà tài trợ
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.contacts.index')}}" class="nav-link {{ App\Helpers\RouteHelper::isActiveRoute('contacts') }}">
                        <i class="fas fa-id-card-alt"></i>
                        <p>
                            Thông tin liên hệ
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.news.index')}}" class="nav-link {{ App\Helpers\RouteHelper::isActiveRoute('news') }}">
                        <i class="far fa-newspaper"></i>
                        <p>
                            Tin tức - Sự kiện
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.galleries.index')}}" class="nav-link {{ App\Helpers\RouteHelper::isActiveRoute('galleries') }}">
                        <i class="fas fa-images"></i>
                        <p>
                            Thư viện ảnh
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="nav-link">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>
                            Đăng xuất
                        </p>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
