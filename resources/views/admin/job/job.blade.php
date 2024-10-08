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
                <h4 class="card-title">Đăng thông tin tuyển dụng</h4>

                <form class="forms-sample" action="{{ route('job.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="company_name">Tên công ty</label>
                        <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Tên công ty" required>
                    </div>
                    <div class="form-group">
                        <label for="job_title">Chức danh công việc</label>
                        <input type="text" class="form-control" id="job_title" name="job_title" placeholder="Chức danh công việc" required>
                    </div>
                    <div class="form-group">
                        <label for="job_description">Mô tả công việc</label>
                        <textarea class="form-control" id="job_description" name="job_description" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="job_location">Địa điểm</label>
                        <input type="text" class="form-control" id="job_location" name="job_location" placeholder="Địa điểm" required>
                    </div>
                    <div class="form-group">
                        <label for="salary">Mức lương</label>
                        <input type="text" class="form-control" id="salary" name="salary" placeholder="Mức lương" required>
                    </div>
                    <div class="form-group">
                        <label for="company_email">Email công ty</label>
                        <input type="email" class="form-control" id="company_email" name="company_email" placeholder="Email" required>
                    </div>
                    

                    <!-- Các trường mới -->
                    <div class="form-group">
                        <label for="experience">Kinh nghiệm</label>
                        <select class="form-control" id="experience" name="experience" required>
                            <option value="">Chọn kinh nghiệm</option>
                            <option value="entry-level">Mới ra trường</option>
                            <option value="mid-level">1 - 2 năm</option>
                            <option value="senior-level">2 - 3 năm</option>
                            <option value="senior-level">3 - 4 năm</option>
                            <option value="middle-level">4 - 5 năm</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="field">Lĩnh vực</label>
                        <input type="text" class="form-control" id="field" name="field" placeholder="Lĩnh vực" required>
                    </div>
                    <div class="form-group">
                        <label for="level">Cấp bậc</label>
                        <select class="form-control" id="level" name="level" required>
                            <option value="">Chọn cấp bậc</option>
                            <option value="intern">Thực tập sinh</option>
                            <option value="junior">Nhân viên</option>
                            <option value="senior">Chuyên viên</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="job_file">Tải lên file mô tả công việc (Word Document)</label>
                        <input type="file" name="job_file" class="form-control" id="job_file" accept=".docx" required>
                    </div>
                    <div class="form-group">
                        <label for="job_image">Ảnh mô tả</label>
                        <input type="file" name="job_image" class="form-control" id="job_image" accept="image/*" required>
                        <small class="form-text text-muted">Chọn ảnh mô tả (jpg, png, gif).</small>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Gửi</button>
                    <button type="button" class="btn btn-light" onclick="location.reload();">Hủy</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
