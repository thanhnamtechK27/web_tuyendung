@extends('users.layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div style="margin-bottom:130px;" class="card">
                <div class="card-header text-center">
                    <h2>Đăng Nhập</h2>
                </div>
                <div class="card-body">
                    <form  action="{{ route('check_login_user') }}" method="POST">
                        @csrf
                        @if(session('success'))
							<div class="alert alert-success alert-dismissible" style="background-color: #dff0d8; color: #3c763d; padding: 10px; border: 1px solid #d0e9c6; border-radius: 4px; margin-bottom: 15px;">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="background: none; border: none; font-size: 20px; color: #3c763d;"></button>
								{{session('success')}}
							</div>
						@endif
						@if($errors->any())
							<div class="alert alert-danger alert-dismissible" style="background-color: #f2dede; color: #a94442; padding: 10px; border: 1px solid #ebccd1; border-radius: 4px; margin-bottom: 15px;">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="background: none; border: none; font-size: 20px; color: #a94442;">×</button>
								<h4 style="margin: 0; font-size: 16px;"><i class="icon fa fa-ban" style="margin-right: 5px;"></i> Thông báo!</h4>
								<ul style="margin: 0; padding-left: 20px;">
									@foreach($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Đăng Nhập</button>
                    </form>
                    <p class="mt-3 text-center">Bạn chưa có tài khoản? <a href="">Đăng ký ngay</a></p>

                    <div class="text-center mt-4">
                        <p>Đăng nhập bằng:</p>
                        <div class="social-login">
                            <button class="btn btn-outline-primary btn-sm me-2"><img style="width:30px;" src="https://banner2.cleanpng.com/20180601/plg/avojbswk2.webp" alt=""></button>
                            <button class="btn btn-outline-primary btn-sm me-2"><img style="width:30px;" src="https://upload.wikimedia.org/wikipedia/commons/b/b9/2023_Facebook_icon.svg" alt=""></button>
                            <button class="btn btn-outline-primary btn-sm"><img style="width:30px;" src="https://i.pinimg.com/736x/88/e1/4c/88e14cc7e7fcbb0e0e09de26cec86c61.jpg" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
