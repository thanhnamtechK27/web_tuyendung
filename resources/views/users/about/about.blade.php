@extends('users.layouts.main')

@section('content')
<body class="about-page" id="top">
<main>
    <section class="about-section">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-5 col-12">
                    <div class="about-info-text">
                        <h2 class="mb-0">Tìm việc 24h</h2>

                        <h4 class="mb-2">Tìm việc. Nhận công việc mới của bạn</h4>

                        <p>Cảm ơn bạn đã truy cập trang web Tìm việc 24h của chúng tôi. Bạn đang tìm kiếm công việc phù hợp nhất? Vui lòng truy cập trang chủ để có thể xem tổng quát hơn</p>

                        <div class="d-flex align-items-center mt-4">
                            <a href="{{route('home')}}" class="custom-btn custom-border-btn btn me-4">Khám phá </a>

                            <a href="{{route('contact')}}" class="custom-link smoothscroll">Liên hệ</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-12 mt-5 mt-lg-0">
                    <div class="about-image-wrap">
                        <img src="images/horizontal-shot-happy-mixed-race-females.jpg" class="about-image about-image-border-radius img-fluid" alt="">

                        <div class="about-info d-flex">
                            <h4 class="text-white mb-0 me-2">20</h4>

                            <p class="text-white mb-0">năm kinh nghiệm</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="services-section section-padding" id="services-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center">
                    <h2 class="mb-5">Chúng tôi cung cấp dịch vụ tốt nhất</h2>
                </div>

                <div class="services-block-wrap col-lg-4 col-md-6 col-12">
                    <div class="services-block">
                        <div class="services-block-title-wrap">
                            <i class="services-block-icon bi-window"></i>
                        
                            <h4 class="services-block-title">Thiết kế website</h4>
                        </div>

                        <div class="services-block-body">
                            <p>Tooplate cung cấp nhiều mẫu website miễn phí Bootstrap 5 cho các trang web thương mại hoặc doanh nghiệp của bạn.</p>
                        </div>
                    </div>
                </div>

                <div class="services-block-wrap col-lg-4 col-md-6 col-12 my-4 my-lg-0 my-md-0">
                    <div class="services-block">
                        <div class="services-block-title-wrap">
                            <i class="services-block-icon bi-twitch"></i>
                        
                            <h4 class="services-block-title">Marketing</h4>
                        </div>

                        <div class="services-block-body">
                            <p>Bạn có thể tải xuống bất kỳ mẫu miễn phí nào cho trang web của bạn. Vui lòng giới thiệu Tooplate cho bạn bè của bạn.</p>
                        </div>
                    </div>
                </div>

                <div class="services-block-wrap col-lg-4 col-md-6 col-12">
                    <div class="services-block">
                        <div class="services-block-title-wrap">
                            <i class="services-block-icon bi-play-circle-fill"></i>
                        
                            <h4 class="services-block-title">Video</h4>
                        </div>

                        <div class="services-block-body">
                            <p>Bạn không được phép phân phối lại tệp ZIP mẫu trên bất kỳ trang web bộ sưu tập mẫu nào khác.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="reviews-section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <h2 class="text-center mb-5">Khách hàng hài lòng</h2>

                    <div class="owl-carousel owl-theme reviews-carousel">
                        <div class="reviews-thumb">
                        
                            <div class="reviews-info d-flex align-items-center">
                                <img src="images/avatar/portrait-charming-middle-aged-attractive-woman-with-blonde-hair.jpg" class="avatar-image img-fluid" alt="">

                                <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                    <p class="mb-0">
                                        <strong>Susan L</strong>
                                        <small>Quản lý sản phẩm</small>
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
                                        <small>Trưởng kỹ thuật</small>
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
                                <img src="images/avatar/portrait-beautiful-young-woman-studying-table-with-laptop-computer-notebook-home-studying-online-e-learning-system.jpg" class="avatar-image img-fluid" alt="">

                                <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                    <p class="mb-0">
                                        <strong>Haley</strong>
                                        <small>Bán hàng & Marketing</small>
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
                                <img src="images/avatar/university-study-abroad-lifestyle-concept-satisfied-happy-asian-male-student-glasses-shirt-showing-thumbs-up-approval-likes-studying-college-holding-laptop-backpack.jpg" class="avatar-image img-fluid" alt="">

                                <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                    <p class="mb-0">
                                        <strong>Kevin</strong>
                                        <small>Thực tập sinh</small>
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

                    <p class="text-white">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito adipcingi elit eismuod larehai</p>
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
</main>
</body>

@endsection
