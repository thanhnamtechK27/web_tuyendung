@extends('users.layouts.main')

@section('content')
<main>

<section class="contact-section section-padding">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-6 col-12 mb-lg-5 mb-3">
                <h4 class="text-center mb-4" style="font-family: 'Roboto', sans-serif;">Google map</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245374.53382129708!2d107.91381556979617!3d16.066678558758802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219c792252a13%3A0x1df0cb4b86727e06!2zxJDDoCBO4bq1bmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1727515810364!5m2!1svi!2s" width="100%" height="450" style="border-radius:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-lg-6 col-12 mb-3">
                <h4 class="text-center mb-4" style="font-family: 'Roboto', sans-serif;">Thông tin liên hệ</h4>
                <div class="contact-info-wrap">
                    <div class="contact-info d-flex align-items-center mb-3">
                        <i class="custom-icon bi-building" style="font-size: 1.2rem;"></i>
                        <p class="mb-0" style="font-size: 0.9rem;">
                            <span class="contact-info-small-title">Văn phòng</span><br>
                            03 Quang Trung, Hải Châu, TP Đà Nẵng
                        </p>
                    </div>

                    <div class="contact-info d-flex align-items-center mb-3">
                        <i class="custom-icon bi-globe" style="font-size: 1.2rem;"></i>
                        <p class="mb-0" style="font-size: 0.9rem;">
                            <span class="contact-info-small-title">Website</span><br>
                            <a href="#" class="site-footer-link">www.job24h.com</a>
                        </p>
                    </div>

                    <div class="contact-info d-flex align-items-center mb-3">
                        <i class="custom-icon bi-telephone" style="font-size: 1.2rem;"></i>
                        <p class="mb-0" style="font-size: 0.9rem;">
                            <span class="contact-info-small-title">Điện thoại</span><br>
                            <a href="tel:305-240-9671" class="site-footer-link">305-240-9671</a>
                        </p>
                    </div>

                    <div class="contact-info d-flex align-items-center mb-3">
                        <i class="custom-icon bi-envelope" style="font-size: 1.2rem;"></i>
                        <p class="mb-0" style="font-size: 0.9rem;">
                            <span class="contact-info-small-title">Email</span><br>
                            <a href="mailto:thanhnamdev@gmail.com" class="site-footer-link">thanhnamdev@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-12 mx-auto">
                <form class="custom-form contact-form" action="#" method="post" role="form">
                    <h2 class="text-center mb-4">Bạn có ý kiến phản hồi?</h2>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <label for="full-name">Họ và Tên</label>
                            <input type="text" name="full-name" id="full-name" class="form-control" placeholder="Nhập họ và tên của bạn" required>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <label for="email">Địa chỉ Email</label>
                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="yourmail@gmail.com" required>
                        </div>

                        <div class="col-lg-12 col-12">
                            <label for="message">Tin nhắn</label>
                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Chúng tôi có thể giúp gì cho bạn?"></textarea>
                        </div>

                        <div class="col-lg-4 col-md-4 col-6 mx-auto">
                            <button type="submit" class="form-control">Gửi Tin nhắn</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<section class="cta-section">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-10">
                <h2 class="text-white mb-2">Hơn 10k việc làm mở</h2>
                <p class="text-white">JOB 24h là một website miễn phí hàng đầu cho tìm kiếm việc làm.</p>
                <p class="text-white">Chúng tôi cung cấp nhiều công việc từ các lĩnh vực khác nhau, giúp bạn tìm kiếm cơ hội nghề nghiệp phù hợp nhất.</p>
            </div>

            <div class="col-lg-4 col-12 ms-auto">
                <div class="custom-border-btn-wrap d-flex align-items-center mt-lg-4 mt-2">
                    <a href="{{route('register_user')}}" class="custom-btn custom-border-btn btn me-4">Tạo tài khoản</a>
                    <a href="#" class="custom-link">Đăng tuyển dụng</a>
                </div>
            </div>

        </div>
    </div>
</section>
</main>

@endsection
