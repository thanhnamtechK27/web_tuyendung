@extends('admin.layouts.main')
@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <h4 class="card-title">Thông tin cá nhân</h4>

                <form class="forms-sample" action="{{route('update_profile')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Tên</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" placeholder="Tên" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" placeholder="Email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->sdt }}" placeholder="Số điện thoại" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Địa chỉ</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ $user->location }}" placeholder="Địa chỉ" required>
                    </div>

                    <div class="form-group">
                        <label for="avatar">Ảnh đại diện</label>
                        <input type="file" name="avatar" class="form-control" id="avatar" accept="image/*"> 
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
                    <button type="button" class="btn btn-light" onclick="location.reload();">Hủy</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
