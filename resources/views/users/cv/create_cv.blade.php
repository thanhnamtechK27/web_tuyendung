@extends('users.layouts.main')

@section('content')
<main>
    <div style="margin-bottom:80px;" class="container mt-5">
        <h4 class="mb-4 text-center text-dark font-weight-bold">TẠO CV CỦA BẠN</h4>
        <div class="row">
            <div class="col-lg-8">
                <div class="card shadow p-4 rounded" style="background: #f9f9f9;">
                    <form style="margin-bottom:30px;" action="{{ route('generate_cv') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="info-container" style="background: linear-gradient(135deg, #4B6CB7, #182848); padding: 20px; ">
                            <div class="mb-3 row align-items-center">
                                <div class="col-md-4 text-center">
                                    <div class="avatar-upload">
                                        <input type="file" id="avatar" name="avatar" accept="image/*" onchange="previewImage(event)" required style="display: none;">
                                        <div class="avatar-preview" id="avatar-preview">
                                            <img id="avatar-img" src="" alt="Hình của bạn">
                                            <span id="placeholder" class="placeholder-text">Ảnh 3x4</span>
                                        </div>
                                        <button style="margin-left:-30px; width:150px; background-color:#0999e0; color:white;" type="button" class="btn btn-outline-success mt-2" onclick="document.getElementById('avatar').click()">Chọn ảnh</button>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <label style="color: WHite;" for="name" class="form-label"><i class="bi bi-person-fill"></i> Tên <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="name" name="name" required>
                                        </div>
                                        <div class="col">
                                            <label style="color: WHite;" for="email" class="form-label"><i class="bi bi-envelope-fill"></i> Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col">
                                            <label style="color: WHite;" for="phone" class="form-label"><i class="bi bi-telephone-fill"></i> Số điện thoại <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="phone" name="phone" required>
                                        </div>
                                        <div class="col">
                                            <label style="color: WHite;" for="social_link" class="form-label"><i class="bi bi-globe"></i> GitHub/LinkedIn/Facebook </label>
                                            <div class="input-group">
                                                <span class="input-group-text"></span>
                                                <input type="text" class="form-control" id="social_link" name="social_link">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <hr style="border-top: 2px solid #ccc; margin: 20px 0;">
                        
                        <div class="form-bottom" style="background: #ffffff; padding: 20px; border-radius: 0 0 10px 10px;">
                            <h5 class="text-dark">Thông tin học vấn</h5>
                            <div class="mb-3 row">
                                <div class="col">
                                    <label for="education" class="form-label">Trình độ học vấn <span class="text-danger">*</span></label>
                                    <select class="form-control" id="education" name="education" required>
                                        <option value="" disabled selected>Chọn trình độ học vấn</option>
                                        <option value="Đại học">Đại học</option>
                                        <option value="Cao đẳng">Cao đẳng</option>
                                        <option value="THPT">THPT</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="major" class="form-label">Chuyên ngành</label>
                                    <input type="text" class="form-control" id="major" name="major">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="skills" class="form-label">Kỹ năng</label>
                                <input type="text" class="form-control" id="skills" name="skills">
                            </div>
                            <div class="mb-3">
                                <label for="experience" class="form-label">Kinh nghiệm</label>
                                <textarea class="form-control" id="experience" name="experience" rows="1"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="certificates" class="form-label">Chứng chỉ</label>
                                <input type="text" class="form-control" id="certificates" name="certificates">
                            </div>
                            <div class="mb-3">
                                <label for="hobbies" class="form-label">Sở thích</label>
                                <input type="text" class="form-control" id="hobbies" name="hobbies">
                            </div>
                            <button type="submit" class="btn btn-success w-100">Tạo CV</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4">
                <div style="background: linear-gradient(135deg, #1c1c3d, #4c4c8f, #0d0d0d);" class="card shadow p-4 rounded bg-light">
                    <h5 class="text-primary">Tham khảo nhiều mẫu CV đa dạng</h5>
                    <img src="https://i.ytimg.com/vi/JlemdNbVhb8/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLDRj9uwvj0Qo1aSHhM31tLEPfm3OQ" alt="CV Examples" class="img-fluid mb-3 rounded" style="object-fit: cover; height: 200px;">

                    <ul class="list-unstyled">
                        <li><i class="bi bi-file-earmark-person text-success"></i> <a href="https://www.canva.com/search?q=cv" target="_blank" class="text-decoration-none text-success">Canva</a></li>
                        <li><i class="bi bi-file-earmark-person text-success"></i> <a href="https://novoresume.com/" target="_blank" class="text-decoration-none text-success">NovoResume</a></li>
                        <li><i class="bi bi-file-earmark-person text-success"></i> <a href="https://www.resume.com/" target="_blank" class="text-decoration-none text-success">Resume.com</a></li>
                        <li><i class="bi bi-file-earmark-person text-success"></i> <a href="https://www.zety.com/" target="_blank" class="text-decoration-none text-success">Zety</a></li>
                        <li><i class="bi bi-file-earmark-person text-success"></i> <a href="https://www.livecareer.com/" target="_blank" class="text-decoration-none text-success">LiveCareer</a></li>
                    </ul>

                    <hr class="my-4">

                    <p class="text-muted">Khám phá các mẫu CV chuyên nghiệp và sáng tạo để giúp bạn nổi bật trong mắt nhà tuyển dụng.</p>
                    <p class="text-muted">Bạn có thể tham khảo thêm các công cụ tạo CV giúp bạn nổi bật trong mắt nhà tuyển dụng. Khám phá các mẫu CV chuyên nghiệp và sáng tạo để giúp bạn nổi bật trong mắt nhà tuyển dụng. Khám phá các mẫu CV chuyên nghiệp và sáng tạo hơn nữa với nhiều templaste khác nhau của các website trên.</p>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .bg-light {
        background-color: #f9f9f9 !important;
    }

    .form-control {
        border: none;
        border-bottom: 2px solid #ccc;
        border-radius: 0;
        outline: none;
        padding: 8px 0;
        background: transparent;
        transition: border-color 0.3s;
        color: #333;
    }

    textarea.form-control {
        resize: none;
    }

    .form-control:focus {
        border-bottom: 2px solid red;
        box-shadow: none;
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        font-size: 16px;
        transition: background-color 0.3s, border-color 0.3s;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }

    .btn-outline-success {
        border-color: #28a745;
        color: #28a745;
    }

    .btn-outline-success:hover {
        background-color: #28a745;
        color: white;
    }

    .card {
        border: 2px solid #28a745;
        border-radius: 10px;
        position: relative;
        overflow: hidden;
    }

    .shadow {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h5 {
        margin-bottom: 1rem;
    }

    hr {
        border-top: 1px solid #e0e0e0;
    }

    .avatar-upload {
        position: relative;
        margin-bottom: 1rem;
    }

    .avatar-preview {
        width: 150px;
        height: 200px;
        border: 2px solid red; 
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f9f9f9;
        margin-top: 30px;
        margin-left: 30px;
        position: relative; 
    }

    .avatar-preview img {
        width: 100%;
        height: 100%;
        object-fit: cover; 
        display: none;
    }

    .avatar-preview img.visible {
        display: block;
    }

    .placeholder-text {
        position: absolute;
        color: #ccc;
        font-size: 1.2em;
    }
</style>

<script>
    function previewImage(event) {
        const input = event.target;
        const preview = document.getElementById('avatar-preview');
        const img = document.getElementById('avatar-img');
        const placeholder = document.getElementById('placeholder');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                img.src = e.target.result;
                img.classList.add('visible'); 
                placeholder.style.display = 'none'; 
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@endsection
