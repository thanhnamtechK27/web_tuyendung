@extends('users.layouts.main')

@section('content')
    <main>
            <section style="margin-bottom: 20px;" class="job-section section-padding pb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <h2 class="job-title mb-0">{{ $job->job_title }}</h2>

                            <div class="job-thumb job-thumb-detail">
                                <div class="d-flex flex-wrap align-items-start border-bottom pt-lg-3 pt-2 pb-3 mb-4">
                                    <p class="job-location mb-0">
                                        <i class="custom-icon bi-geo-alt me-1"></i>
                                        {{ $job->job_location }}
                                    </p>
                                    <p class="job-date mb-0"> 
                                        <i class="custom-icon bi-clock me-1"></i>
                                        {{ $job->created_at->diffForHumans() }}
                                    </p>
                                    <p class="job-price mb-0">
                                        <i class="custom-icon bi-cash me-1"></i>
                                        {{ $job->salary }}
                                    </p>
                                    <div class="d-flex">
                                        <p class="mb-0">
                                            <a href="#" class="badge badge-level">{{ $job->job_type }}</a>
                                        </p>
                                    </div>
                                </div>

                                <h4 class="mt-4 mb-2">Mô tả công việc</h4>
                                <p>{{ $job->job_description }}</p>

                                <h5 class="mt-4 mb-3">Phúc lợi</h5>
                                <p><strong>Mức lương:</strong> {{ $job->salary }}</p>

                                <h5 class="mt-4 mb-3">Tài liệu chi tiết công việc</h5>
                                <div class="mb-3">
                                    <a href="{{ asset('storage/' . $job->job_file) }}" class="custom-btn btn btn-custom-blue" target="_blank">
                                        <i class="bi-download me-1"></i> Tải về file chi tiết công việc
                                    </a>
                                </div>

                                <div class="d-flex align-items-center mt-4 mb-3">
                                    <img src="{{ asset('storage/' . $job->job_image) }}" alt="Ảnh công ty" class="img-fluid rounded" style="max-width: 150px; height: auto;">
                                    <div class="ms-3">
                                        <p class="mb-0" style="font-size: 16px; font-weight: bold;">{{ $job->company_name }}</p>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center flex-wrap mt-5 border-top pt-4">
                                <a href="{{ route('job.apply', $job->id) }}" class="custom-btn btn mt-2">Apply now</a>
                                <a href="#" class="custom-btn custom-border-btn btn mt-2 ms-lg-4 ms-3">Lưu công việc</a>

                                    <div class="job-detail-share d-flex align-items-center">
                                        <p class="mb-0 me-lg-4 me-3">Share:</p>
                                        <a href="#" class="bi-facebook"></a>
                                        <a href="#" class="bi-twitter mx-3"></a>
                                        <a href="#" class="bi-share"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mt-5 mt-lg-0">
                            <div class="job-thumb job-thumb-detail-box bg-light bg-opacity-75 shadow-lg border border-primary rounded p-4">
                                <div class="d-flex align-items-center">
                                    <div class="job-image-wrap d-flex align-items-center bg-white shadow-sm mb-3 p-2 rounded">
                                        <img src="{{ asset('storage/' . $job->job_image) }}" class="job-image me-3 img-fluid rounded" alt="">
                                        <p class="mb-0" style="font-size: 13px; white-space: nowrap; color: #0056b3; font-weight: bold;">{{ $job->company_name }}</p>
                                    </div>
                                    <a href="#" class="bi-bookmark ms-auto me-2 text-secondary"></a>
                                    <a href="#" class="bi-heart text-danger"></a>
                                </div>

                                <h6 class="mt-3 mb-2 text-primary">Thông tin công ty</h6>
                                <p class="text-dark">{{ $job->job_description }}</p>

                                <h6 class="mt-4 mb-3 text-primary">Liên hệ</h6>
                                <p class="mb-2">
                                    <i class="custom-icon bi-globe me-1 text-info"></i>
                                    <a href="http://job24h.com" class="site-footer-link text-primary">job24h.com</a>
                                </p>
                                <p>
                                    <i class="custom-icon bi-envelope me-1 text-danger"></i>
                                    <a href="mailto:{{ $job->company_email }}" class="site-footer-link text-primary">{{ $job->company_email }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </main>
        <style>
            .transparent-bg {
                background-color: rgba(255, 255, 255, 0.85); /* Màu trắng với độ trong suốt 85% */
            }
            .btn-custom-blue {
                background-color: #007bff; /* Màu xanh dương */
                border-color: #007bff;
                font-size: 14px; /* Kích thước chữ nhỏ hơn */
                padding: 7px 7px; /* Giảm padding để nút nhỏ lại */
            }

            .btn-custom-blue:hover {
                background-color: #0056b3; /* Màu xanh đậm hơn khi hover */
                border-color: #0056b3;
            }

        </style>
        
@endsection
