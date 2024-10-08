<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{asset('users/images/logo.png')}}" class="img-fluid logo-image">
            <div class="d-flex flex-column">
                <strong class="logo-text">JOB</strong>
                <small class="logo-slogan">Tìm việc 24h</small>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-center ms-lg-5">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="{{ route('home') }}">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('job_list') ? 'active' : '' }}" href="{{ route('job_list') }}">Tìm việc</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('about') }}" id="navbarLightDropdownMenuLink">Giới thiệu</a>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('showblog') }}">Blog</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Công cụ</a>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('create_cv') }}">Tạo CV</a></li> <!-- Đã sửa đường dẫn ở đây -->
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Hỗ trợ</a>
                </li>

                @if(session()->has('email'))
                    <li class="nav-item ms-lg-auto">
                        <a class="nav-link" href="{{ route('logout_user') }}" style="color: black;">Logout 
                            <i class="bi bi-box-arrow-right me-1"></i>
                        </a>
                    </li>
                @else
                    <li class="nav-item ms-lg-auto">
                        <a class="nav-link" href="{{ route('register_user') }}">Đăng ký</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-btn btn" href="{{ route('login_user') }}">Đăng nhập</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<style>
    
</style>