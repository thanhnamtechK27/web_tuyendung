<div class="menu-left">
    <button class="btn btn-toggle" id="menu-toggle">
        <i class="bi bi-list"></i>
    </button>
    <div class="menu-content">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="bi bi-house"></i> <span class="menu-text">Trang chủ</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('job_list') }}">
                    <i class="bi bi-briefcase"></i> <span class="menu-text">Tìm việc</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">
                    <i class="bi bi-info-circle"></i> <span class="menu-text">Giới thiệu</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bi bi-tools"></i> <span class="menu-text">Công cụ</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">
                    <i class="bi bi-life-preserver"></i> <span class="menu-text">Hỗ trợ</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<style>
    .menu-left {
        background-color: #343a40; /* Màu nền tối */
        color: #ffffff; /* Màu chữ sáng */
        border-right: 1px solid #495057;
        height: 100vh;
        width: 250px;
        position: fixed;
        top: 0;
        left: 0;
        transform: translateX(-100%);
        transition: transform 0.3s ease;
        z-index: 1000;
    }

    .menu-left.active {
        transform: translateX(0);
    }

    .menu-content {
        padding: 20px;
    }

    .btn-toggle {
        position: absolute;
        top: 20px;
        right: -50px; /* Đưa nút ra ngoài menu */
        border: none;
        background-color: transparent;
        cursor: pointer;
        font-size: 20px;
        color: blue; /* Đổi màu nút sang trắng */
        z-index: 1001;
    }

    .nav-link {
        padding: 15px;
        display: flex;
        align-items: center;
        color: #ffffff; /* Màu chữ sáng */
        text-decoration: none;
        transition: background 0.3s;
    }



    .menu-text {
        margin-left: 10px;
        transition: opacity 0.3s;
    }

    .menu-left:not(.active) .menu-text {
        opacity: 0; 
    }
</style>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        const menu = document.querySelector('.menu-left');
        menu.classList.toggle('active');
    });
</script>
