<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV  {{ $name }}</title>
    <style>
    @font-face {
        font-family: 'MyCustomFont';
        src: url('{{ public_path('fonts/MyCustomFont.ttf') }}');
    }

    body {
        font-family: 'MyCustomFont', sans-serif;
    }
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
</head>
<body>

    <main>
        <h1>YOUR CV</h1>
        <div style="margin-bottom:80px;" class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card shadow p-4 rounded" style="background: #f9f9f9;">
                        <form style="margin-bottom:30px;" action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="info-container" style="background: linear-gradient(135deg, #2c3e50, #bdc3c7); padding: 20px;">
                                <div class="mb-3 row align-items-center">
                                    <div class="col-md-4 text-center">
                                        <div class="avatar-upload">
                                            <input type="file" id="avatar" name="avatar" accept="image/*" onchange="previewImage(event)" required style="display: none;">
                                            <div class="avatar-preview" id="avatar-preview">
                                                <img id="avatar-img" src="" alt="Hình của bạn">
                                                <span id="placeholder" class="placeholder-text">Ảnh 3x4</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <label for="name" class="form-label"><i class="bi bi-person-fill"></i> {{$name}} <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="name" name="name" required>
                                            </div>
                                            <div class="col">
                                                <label for="email" class="form-label"><i class="bi bi-envelope-fill"></i> {{$email}} <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" id="email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col">
                                                <label for="phone" class="form-label"><i class="bi bi-telephone-fill"></i> {{$phone}} <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="phone" name="phone" required>
                                            </div>
                                            <div class="col">
                                                <label for="social_link" class="form-label"><i class="bi bi-globe"></i> {{$email}} </label>
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
                                        <label for="education" class="form-label">{{$education}} <span class="text-danger">*</span></label>
                                        
                                    </div>
                                    <div class="col">
                                        <label for="major" class="form-label">{{$experience}}</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="skills" class="form-label">{{$skills}}</label>
                                </div>
                                <div class="mb-3">
                                    <label for="experience" class="form-label">{{$experience}}</label>
                                </div>
                                <div class="mb-3">
                                    <label for="certificates" class="form-label">{{$experience}}</label>
                                </div>
                                <div class="mb-3">
                                    <label for="hobbies" class="form-label">Sở thích</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
