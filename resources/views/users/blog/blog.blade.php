@extends('users.layouts.main')

@section('content')
<main>
    <section  class="hero-section d-flex justify-content-center align-items-center">
        <div class="section-overlay"></div>
        <div style="background: linear-gradient(to right, #FFB74D, #FF7043); padding:15px;" class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="hero-section-text mt-5">
                        <h6 class="text-white">Bạn đang tìm kiếm công việc mơ ước của mình?</h6>

                        <h1 class="hero-title" style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; line-height: 1.2; color: #ffffff; margin-top: 1rem; margin-bottom: 1rem;">
                            Đây là nền tảng trực tuyến<br> Tốt nhất để tìm việc làm phù hợp
                        </h1>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="blog-posts-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mb-4 text-center">Bài viết mới nhất</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="blog-post">
                        <img src="https://img.freepik.com/free-photo/man-spreads-palms-feels-clueless-uncertain-canot-make-choice-wears-round-eyeglasses-denim-shirt-poses_273609-51731.jpg?t=st=1727949779~exp=1727953379~hmac=941ec6c8491f7d24283528d48af504399b8df14d45f40b561db6a221af3f6c3a&w=1060" class="avatar-image img-fluid" alt="">
                        <h3 class="post-title">Cách viết CV ấn tượng</h3>
                        <p class="post-excerpt">Để gây ấn tượng với nhà tuyển dụng, một CV tốt là rất quan trọng. Hãy cùng khám phá các mẹo hữu ích và hay hơn trong bài viết này.</p>
                        <a style="background-color: green; border: none;" href="#" class="btn btn-secondary">Đọc thêm</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-post">
                        <img src="images/avatar/portrait-charming-middle-aged-attractive-woman-with-blonde-hair.jpg" class="avatar-image img-fluid" alt="">
                        <h3 class="post-title">Phỏng vấn thành công</h3>
                        <p class="post-excerpt">Chuẩn bị cho một buổi phỏng vấn có thể là một thách thức. Bài viết này sẽ giúp bạn tự tin hơn khi đối diện với nhà tuyển dụng.</p>
                        <a style="background-color: green; border: none;" href="#" class="btn btn-secondary">Đọc thêm</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-post">
                        <img src="https://img.freepik.com/free-photo/indoor-shot-handsome-bearded-caucasian-hipster-wearing-maroon-hat-denim-shirt-sitting-cafe-looking-away-with-thoughtful-expression-his-face-wondering-what-future-has-store-him_273609-89.jpg?t=st=1727949723~exp=1727953323~hmac=8dc66f656331c2bcfea056a0ca68d73640b248c05363cbd7a62d5a3e16bb0d45&w=1060" class="avatar-image img-fluid" alt="">
                        <h3 class="post-title">Kỹ năng cần có trong thế kỷ 21</h3>
                        <p class="post-excerpt">Trong thời đại công nghệ 4.0, các kỹ năng mới là điều cần thiết để thành công. Hãy cùng tìm hiểu xem đó là gì mà gọi là kỹ năng mới </p>
                        <a style="background-color: green; border: none;" href="#" class="btn btn-secondary">Đọc thêm</a>
                    </div>
                </div>
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

</main>
<style>
    body.blog-page {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .hero-section {
        position: relative;
        height: 40vh; /* Set a smaller height for the slider */
        overflow: hidden;
    }

    .hero-section img {
        object-fit: cover; /* Ensure images cover the area nicely */
        height: 100%;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5); /* Slightly transparent background for controls */
        border-radius: 50%;
    }

    /* Adjusting the appearance of the slider controls on hover */
    .carousel-control-prev:hover, 
    .carousel-control-next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    .section-padding {
        padding: 60px 0;
    }

    .blog-posts-section {
        background-color: #F7F9FC;
    }

    .blog-post {
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
        margin-bottom: 30px;
        transition: transform 0.3s;
    }

    .blog-post:hover {
        transform: translateY(-5px);
    }

    .post-title {
        font-size: 22px;
        margin: 15px 0;
        color: #333;
    }

    .post-excerpt {
        color: #777;
    }

    /* Media Queries for responsiveness */
    @media (max-width: 768px) {
        .hero-section {
            height: 30vh; /* Adjust height on smaller screens */
        }
    }
</style>
@endsection