<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('member.index')}}" class="brand-link">
        <img src="/images/0/HTML/f_logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Trang quản trị</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('member.news.index')}}" class="nav-link {{ App\Helpers\RouteHelper::isActiveRoute('news') }}">
                        <i class="far fa-newspaper"></i>
                        <p>
                            Đăng bài gây quỹ
                        </p>
                    </a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a href="{{route('member.image.index')}}" class="nav-link {{ App\Helpers\RouteHelper::isActiveRoute('image') }}">--}}
{{--                        <i class="fas fa-images"></i>--}}
{{--                        <p>--}}
{{--                            Đăng ảnh--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
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
