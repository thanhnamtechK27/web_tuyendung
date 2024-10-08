@extends('users.layouts.main')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div style="max-width: 500px;" class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Đăng Ký</h2>
                </div>
                <div class="card-body p-3">
                    <form action="{{ route('check_register_user') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-6">
                                <label for="name" class="form-label">Tên</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">
                                <label for="phone" class="form-label">Số điện thoại</label>
                                <input type="tel" class="form-control" id="phone" name="sdt" required>
                            </div>
                            <div class="col-6">
                                <label for="location" class="form-label">Địa điểm</label>
                                <input type="text" class="form-control" id="location" name="location" placeholder="Tùy chọn">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">
                                <label for="avatar" class="form-label">Avatar</label>
                                <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*">
                            </div>
                            <div class="col-6">
                                <label for="level" class="form-label">Vai trò</label>
                                <select class="form-select" id="level" name="level" required>
                                    <option value="1">Khách hàng</option>
                                    <option value="0">Admin</option>
                                    <option value="2">Nhà tuyển dụng</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Đăng Ký</button>
                    </form>
                    <p class="mt-2 text-center">Bạn đã có tài khoản? <a href="">Đăng nhập ngay</a></p>

                    <div class="text-center mt-3">
                        <p>Đăng ký bằng:</p>
                        <div class="social-login">
                            <button class="btn btn-outline-primary btn-sm me-2">
                                <img style="width:30px;" src="https://upload.wikimedia.org/wikipedia/commons/b/b9/2023_Facebook_icon.svg" alt="">
                            </button>
                            <button class="btn btn-outline-primary btn-sm me-2">
                                <img style="width:30px;" src="https://banner2.cleanpng.com/20180601/plg/avojbswk2.webp" alt="">
                            </button>
                            <button class="btn btn-outline-primary btn-sm">
                                <img style="width:30px;" src="https://i.pinimg.com/736x/88/e1/4c/88e14cc7e7fcbb0e0e09de26cec86c61.jpg" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
