<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item sidebar-category">
            <p>Navigation</p>
            <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="mdi mdi-view-quilt menu-icon"></i>
                <span class="menu-title">Dashboard</span>
                <div class="badge badge-info badge-pill">2</div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('profile') }}">
                <i class="mdi mdi-account-box-outline menu-icon"></i>
                <span class="menu-title">Profile</span>
            </a>
        </li>
        <li class="nav-item">
            @if(Auth::check())
                <a class="nav-link" href="{{ route('job') }}">
                    <i class="mdi mdi-note menu-icon"></i>
                    <span class="menu-title">JOB Manager</span>
                </a>
            @else
                <a class="nav-link" href="{{ route('login_user') }}">
                    <i class="mdi mdi-note menu-icon"></i>
                    <span class="menu-title">JOB Manager</span>
                </a>
            @endif
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('job.applications') }}">
                <i class="mdi mdi-folder menu-icon"></i>
                <span class="menu-title">Manager CV</span>
            </a>
        </li>
        <li class="nav-item sidebar-category">
            <p>Components</p>
            <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-palette menu-icon"></i>
                <span class="menu-title">UI Elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                </ul>
            </div>
        </li>
        <!-- Các mục còn lại ở đây -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <button class="btn bg-danger btn-sm menu-title">Job 24h - Home</button>
            </a>
        </li>
    </ul>
</nav>

