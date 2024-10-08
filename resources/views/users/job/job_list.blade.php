@extends('users.layouts.main')

@section('content')
<body class="job-listings-page" id="top">
<main>
    <section>
        <div class="container mt-4">
            <form id="job-search-form" method="GET" action="{{ route('job_list') }}" class="search-form">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label style="color: white;" for="job-title" class="form-label">Tên công việc</label>
                        <input type="text" class="form-control" name="job_title" id="job-title" placeholder="Ví dụ: Kỹ sư phần mềm" required>
                    </div>
                    <div class="col-md-4">
                        <label style="color: white;"for="location" class="form-label">Địa điểm</label>
                        <input type="text" class="form-control" name="location" id="location" placeholder="Ví dụ: Hà Nội">
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <button type="submit" class="btn" style="background-color: #33CC33; color: white; width: 100%; font-size: 1.0rem;">
                            <i class="bi bi-search me-2"></i> <!-- Thêm icon tìm kiếm -->
                            Tìm kiếm
                        </button>
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <button type="button" class="btn" style="background-color: #FF6600; color: white; border: none; width: 100%;" data-bs-toggle="collapse" data-bs-target="#advanced-search">
                            <i class="bi bi-funnel-fill me-2" style="color: white;"></i> Lọc nâng cao                
                        </button>
                    </div>
                </div>
                <div id="advanced-search" class="collapse mt-3">
                    <div class="row mb-3">
                        <div class="col">
                            <label style="color: white;"for="field" class="form-label">Lĩnh vực</label>
                            <input type="text" class="form-control" name="field" id="field" placeholder="Ví dụ: Công nghệ thông tin">
                        </div>
                        <div class="col">
                            <label style="color: white;"for="experience" class="form-label">Kinh nghiệm</label>
                            <select class="form-select" name="experience" id="experience">
                                <option value="">Chọn kinh nghiệm</option>
                                <option value="entry-level">Mới ra trường</option>
                                <option value="mid-level">1 - 2 năm</option>
                                <option value="senior-level">2 - 3 năm</option>
                                <option value="senior-level">3 - 4 năm</option>
                                <option value="middle-level">4 - 5 năm</option>

                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label style="color: white;"for="salary" class="form-label">Mức lương</label>
                            <input type="text" class="form-control" name="salary" id="salary" placeholder="Ví dụ: 10 triệu">
                        </div>
                        <div class="col">
                            <label style="color: white;"for="level" class="form-label">Cấp bậc</label>
                            <select class="form-select" name="level" id="level">
                                <option value="">Chọn cấp bậc</option>
                                <option value="intern">Thực tập sinh</option>
                                <option value="junior">Nhân viên</option>
                                <option value="senior">Chuyên viên</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(isset($jobs) && $jobs->isEmpty())
        <p style="color:red; margin-left: 710px;">Không có công việc như bạn tìm kiếm.</p>
    @else
    <section class="job-section section-padding" style="margin-top: 20px;">
        <div class="container">
            <div class="row">
            @foreach($jobs as $job)
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="job-thumb job-thumb-box" style="border: 1px solid #007bff; border-radius: 5px; background-color: #f8f9fa;">
                        <div class="job-body p-3">
                            <h4 class="job-title">
                                <a href="{{ route('job_detail', $job->id) }}" class="job-title-link">{{ $job->job_title }}</a>
                            </h4>
                            <div class="d-flex align-items-center">
                                <p class="mb-0">{{ $job->company_name }}</p>
                            </div>
                            <p class="job-location me-2">
                                <i class="custom-icon bi-geo-alt me-1"></i>
                                {{ $job->job_location }}
                            </p>
                            <p class="job-date" style="font-size: 12px;">
                                <i class="custom-icon bi-clock me-1"></i>
                                {{ $job->created_at->diffForHumans() }}
                            </p>
                            <div class="d-flex align-items-center border-top pt-3">
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-cash me-1"></i>
                                    {{ $job->salary }}
                                </p>
                                <a href="{{ route('job_detail', $job->id) }}" class="custom-btn btn ms-auto">Apply now</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
        <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-5">
                        <li class="page-item {{ $jobs->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $jobs->previousPageUrl() }}" aria-label="Previous">
                                <i class="bi bi-chevron-left"></i>
                            </a>
                        </li>

                        @foreach ($jobs->getUrlRange(1, $jobs->lastPage()) as $page => $url)
                            <li class="page-item {{ $page == $jobs->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach

                        <li class="page-item {{ $jobs->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $jobs->nextPageUrl() }}" aria-label="Next">
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
    </section>
    @endif 
</main>

<style>
    .search-form {
        background: linear-gradient(to right, #6a11cb, #2575fc); /* Gradient background */
        border-radius: 8px; /* Rounded corners */
        padding: 20px; /* Padding */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Shadow effect */
    }
</style>

</body>
@endsection
