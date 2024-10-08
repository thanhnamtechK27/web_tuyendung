@extends('users.layouts.main')

@section('content')
<main>
    <section class="hero-section d-flex justify-content-center align-items-center">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="hero-section-text mt-5">
                        <h6 class="text-white">Bạn đang tìm kiếm công việc mơ ước của mình?</h6>

                        <h1 class="hero-title" style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; line-height: 1.2; color: #ffffff; margin-top: 1rem; margin-bottom: 1rem;">
                            Nền tảng trực tuyến<br> Tốt nhất để tìm việc làm phù hợp
                        </h1>
                        <a style ="background-color: #2beb32;" href="#categories-section" class="custom-btn  btn">Tìm ngay</a>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                <form class="custom-form hero-form" action="{{ route('job_list') }}" method="GET">
                    <h3 class="text-white mb-3">Tìm công việc của bạn</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="bi-person custom-icon"></i></span>
                                <input type="text" name="job-title" id="job-title" class="form-control" placeholder="Tên công việc" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon2"><i class="bi-geo-alt custom-icon"></i></span>
                                <input type="text" name="job-location" id="job-location" class="form-control" placeholder="Địa chỉ" >
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
                            <button type="submit" class="form-control" style="background-color: #FF9900;">
                                Tìm công việc
                            </button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
    <section class="job-section job-featured-section section-padding" id="job-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 text-center mx-auto mb-4">
                    <h2>Tin tuyển dụng</h2>
                    <p><strong>Hơn 10 nghìn việc làm đang mở</strong> <br>Hãy nhanh tay tìm công việc phù hợp với bạn, chọn apply công việc bạn muốn để có thể chuyển đến trang ứng tuyển ngay</p>
                </div>
                <div class="col-lg-12 col-12">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if(isset($jobs) && $jobs->isEmpty())
                        <p>Không có công việc nào.</p>
                    @else
                        @foreach($jobs as $job)
                            <div class="job-thumb d-flex">
                                <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                                    <div class="mb-3">
                                        <h4 class="job-title mb-lg-0">
                                            <a href="" class="job-title-link">{{ $job->job_title }}</a>
                                        </h4>
                                        <div class="d-flex flex-wrap align-items-center">
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
                                    </div>
                                    <div class="job-section-btn-wrap">
                                        <a href="{{ route('job_detail', $job->id) }}" class="custom-btn btn">Apply now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <!-- Pagination -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mt-5" id="pagination">
                            <li class="page-item {{ $jobs->onFirstPage() ? 'disabled' : '' }}">
                                <a class="page-link" href="javascript:void(0);" data-url="{{ $jobs->previousPageUrl() }}" aria-label="Previous">
                                    <i class="bi bi-chevron-left"></i>
                                </a>
                            </li>

                            @foreach ($jobs->getUrlRange(1, $jobs->lastPage()) as $page => $url)
                                <li class="page-item {{ $page == $jobs->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="javascript:void(0);" data-url="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endforeach

                            <li class="page-item {{ $jobs->hasMorePages() ? '' : 'disabled' }}">
                                <a class="page-link" href="javascript:void(0);" data-url="{{ $jobs->nextPageUrl() }}" aria-label="Next">
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top:30px; margin-bottom:30px;" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="about-image-wrap custom-border-radius-start">
                        <img src="images/professional-asian-businesswoman-gray-blazer.jpg" class="about-image custom-border-radius-start img-fluid" alt="">
                        <div class="about-info">
                            <h4 class="text-white mb-0 me-2">Julia Ward</h4>
                            <p class="text-white mb-0">Nhà đầu tư</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="custom-text-block">
                        <h2 class="text-white mb-2">Giới thiệu JOB 24h</h2>
                        <p class="text-white">JOB 24h Job là một mẫu website miễn phí cho các cổng thông tin việc làm. Bố cục này dựa trên framework CSS Bootstrap 5. Cảm ơn bạn đã truy cập <a href="https://www.tooplate.com" target="_parent">trang web Tooplate</a>. Hình ảnh được lấy từ <a href="https://www.freepik.com/" target="_blank">FreePik</a>.</p>
                        <div class="custom-border-btn-wrap d-flex align-items-center mt-5">
                            <a href="about.html" class="custom-btn custom-border-btn btn me-4">Tìm hiểu về chúng tôi</a>
                            <a href="#job-section" class="custom-link smoothscroll">Khám phá Công việc</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="instagram-block">
                        <img src="images/horizontal-shot-happy-mixed-race-females.jpg" class="about-image custom-border-radius-end img-fluid" alt="">
                        <div class="instagram-block-text">
                            <a href="https://instagram.com/" class="custom-btn btn">
                                <i class="bi-instagram"></i>
                                @Job24h
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="custom-text-block custom-border-radius-start">
                        <h2 class="text-white mb-3">JOB 24h giúp bạn có cách dễ dàng hơn để tìm việc mới</h2>
                        <p class="text-white">Bạn không được phép phân phối lại tệp ZIP mẫu trên bất kỳ trang web nào khác về bộ sưu tập mẫu. Vui lòng liên hệ với chúng tôi để biết thêm thông tin. Cảm ơn bạn.</p>
                        <div class="d-flex mt-4">
                            <div class="counter-thumb"> 
                                <div class="d-flex">
                                    <span class="counter-number" data-from="1" data-to="12" data-speed="1000"></span>
                                    <span class="counter-number-text">M</span>
                                </div>
                                <span class="counter-text">Người dùng hoạt động hàng ngày</span>
                            </div> 
                            <div class="counter-thumb">    
                                <div class="d-flex">
                                    <span class="counter-number" data-from="1" data-to="450" data-speed="1000"></span>
                                    <span class="counter-number-text">k</span>
                                </div>
                                <span class="counter-text">Công việc mở</span>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="video-thumb">
                        <img src="images/people-working-as-team-company.jpg" class="about-image custom-border-radius-end img-fluid" alt="">
                        <div class="video-info">
                            <a href="https://www.youtube.com/tooplate" class="youtube-icon bi-youtube"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="job-section recent-jobs-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12 mb-4">
                    <h2>Việc làm phổ biến</h2>
                    <p><strong>Hơn 10 nghìn việc làm đang tuyển dụng</strong><br>Nhanh tay tìm kiếm và apply cho mình công việc phù hợp</p>
                </div>
                <div class="clearfix"></div>
                @foreach($jobs as $job)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="job-thumb job-thumb-box">
                        <div class="job-image-box-wrap">
                            <a href="job-details.html">
                            </a>
                            <div class="job-image-box-wrap-info d-flex align-items-center">
                                <p class="mb-0">
                                    <a href="job-listings.html" class="badge badge-level">{{ $job->level }}</a>
                                </p>
                                <p class="mb-0">
                                    <a href="job-listings.html" class="badge">Freelance</a>
                                </p>
                            </div>
                        </div>
                        <div class="job-body">
                            <h4 class="job-title">
                                <a href="job-details.html" class="job-title-link">{{ $job->job_title }}</a>
                            </h4>
                            <div class="d-flex align-items-center">
                                <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                    <img style="width:180px;" src="{{ asset('storage/' . $job->job_image) }}" class="job-image me-3 img-fluid" alt="">
                                    <p style="font-size: 12px; white-space: nowrap;" class="mb-0">{{ $job->company_name }}</p>
                                </div>
                                <a href="#" class="bi-bookmark ms-auto me-2"></a>
                                <a href="#" class="bi-heart"></a>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="job-location me-2">
                                    <i class="custom-icon bi-geo-alt me-1"></i>
                                    {{ $job->job_location }}
                                </p>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="job-date">
                                    <i class="custom-icon bi-clock me-1"></i>
                                    {{ $job->created_at->diffForHumans() }}
                                </p>
                            </div>
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
                    <a style="width: max;" href="{{route('job_list')}}" class="custom-btn btn ms-lg-auto">Xem nhiều công việc hơn</a>
            </div>
        </div>
    </section>
    <section class="reviews-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <h2 class="text-center mb-5">Đánh giá của người dùng</h2>
                    <div class="owl-carousel owl-theme reviews-carousel">
                        <div class="reviews-thumb">
                            <div class="reviews-info d-flex align-items-center">
                                <img src="images/avatar/portrait-charming-middle-aged-attractive-woman-with-blonde-hair.jpg" class="avatar-image img-fluid" alt="">
                                <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                    <p class="mb-0">
                                        <strong>Susan L</strong>
                                        <small>Product Manager</small>
                                    </p>
                                    <div class="reviews-icons">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-body">
                                <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">
                                <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                            </div>
                        </div>
                        <div class="reviews-thumb">
                            <div class="reviews-info d-flex align-items-center">
                                <img src="images/avatar/medium-shot-smiley-senior-man.jpg" class="avatar-image img-fluid" alt="">
                                <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                    <p class="mb-0">
                                        <strong>Jack</strong>
                                        <small>Technical Lead</small>
                                    </p>
                                    <div class="reviews-icons">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                        <i class="bi-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-body">
                                <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">
                                <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                            </div>
                        </div>
                        <div class="reviews-thumb">
                            <div class="reviews-info d-flex align-items-center">
                                <img src="images/avatar/portrait-beautiful-young-woman.jpg" class="avatar-image img-fluid" alt="">
                                <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                    <p class="mb-0">
                                        <strong>Haley</strong>
                                        <small>Sales & Marketing</small>
                                    </p>
                                    <div class="reviews-icons">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-body">
                                <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">
                                <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                            </div>
                        </div>
                        <div class="reviews-thumb">
                            <div class="reviews-info d-flex align-items-center">
                                <img src="images/avatar/blond-man-happy-expression.jpg" class="avatar-image img-fluid" alt="">
                                <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                    <p class="mb-0">
                                        <strong>Jackson</strong>
                                        <small>Dev Ops</small>
                                    </p>
                                    <div class="reviews-icons">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                        <i class="bi-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-body">
                                <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">
                                <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                            </div>
                        </div>
                        <div class="reviews-thumb">
                            <div class="reviews-info d-flex align-items-center">
                                <img src="images/avatar/university-study-abroad-lifestyle-concept.jpg" class="avatar-image img-fluid" alt="">
                                <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                    <p class="mb-0">
                                        <strong>Kevin</strong>
                                        <small>Internship</small>
                                    </p>
                                    <div class="reviews-icons">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-body">
                                <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">
                                <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-section">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-10">
                    <h2 class="text-white mb-2">Hơn 10k công việc mở</h2>
                    <p class="text-white">Nhanh tay tìm kiếm và apply cho mình công việc phù hợp</p>
                </div>
                <div class="col-lg-4 col-12 ms-auto">
                    <div class="custom-border-btn-wrap d-flex align-items-center mt-lg-4 mt-2">
                        <a href="#" class="custom-btn custom-border-btn btn me-4">Tạo tài khoản</a>
                        <a href="#" class="custom-link">Tìm công việc</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).on('click', '.page-link', function (e) {
            e.preventDefault();
            var url = $(this).data('url');
            
            if (url) {
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function (data) {
                        $('#job-section').html($(data).find('#job-section').html());
                        $('#pagination').html($(data).find('#pagination').html());
                    },
                    error: function () {
                        alert('Có lỗi xảy ra. Vui lòng thử lại.');
                    }
                });
            }
        });
    </script>
</main>
@endsection