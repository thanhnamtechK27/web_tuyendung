@extends('users.layouts.main')

@section('content')
<main>
    <div class="container mt-5" style="margin-bottom: 150px; border: 5px solid red;  padding: 20px;">
        <h4 class="mb-4 text-center text-white p-3 rounded" style="background-color: rgba(234, 255, 0, 1); ">
            <span style="color:black;">XÁC NHẬN ỨNG TUYỂN VỊ TRÍ</span><br>
            <strong style="font-size: 1.2rem; color:red;">{{ $job->job_title }}</strong>
        </h4>
        @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow p-4 rounded bg-light">
                    <form action="{{ url('/apply/' . $job->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên <i class="bi bi-person"></i></label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email <i class="bi bi-envelope"></i></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="resume" class="form-label">CV (file PDF, DOC, DOCX) <i class="bi bi-file-earmark-text"></i></label>
                            <input type="file" class="form-control" id="resume" name="resume" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Gửi Đơn <i class="bi bi-send"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <div class="position-relative">
                    <img src="https://lhu.edu.vn/Data/News/123/images/234956_hinh_tuyen_dung.gif" alt="Ứng tuyển" class="img-fluid rounded" style="height: 300px; width: auto; object-fit: contain;">
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .bg-light {
        background-color: #f8f9fa !important;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        font-size: 16px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .card {
        border: none;
        border-radius: 10px;
    }

    .shadow {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .mt-5 {
        margin-top: 3rem !important;
    }

    .img-fluid {
        border-radius: 10px;
    }

    h2 {
        font-family: 'Arial', sans-serif;
        font-weight: bold;
    }
</style>
@endsection
