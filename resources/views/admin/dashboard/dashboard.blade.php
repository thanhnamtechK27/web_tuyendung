@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 col-xl-6 grid-margin stretch-card">
            <div class="row w-100 flex-grow">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Thống kê truy cập website</p>
                            <p class="text-muted">Tăng 25% lưu lượng truy cập so với tuần trước</p>
                            <div class="row mb-3">
                                <div class="col-md-7">
                                    <div class="d-flex justify-content-between traffic-status">
                                        <div class="item">
                                            <p class="mb-">Người dùng</p>
                                            <h5 class="font-weight-bold mb-0">93,956</h5>
                                            <div class="color-border"></div>
                                        </div>
                                        <div class="item">
                                            <p class="mb-">Tỷ lệ thoát</p>
                                            <h5 class="font-weight-bold mb-0">58,605</h5>
                                            <div class="color-border"></div>
                                        </div>
                                        <div class="item">
                                            <p class="mb-">Lượt xem trang</p>
                                            <h5 class="font-weight-bold mb-0">78,254</h5>
                                            <div class="color-border"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <ul class="nav nav-pills nav-pills-custom justify-content-md-end" id="pills-tab-custom" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-home-tab-custom" data-toggle="pill" href="#pills-health" role="tab" aria-controls="pills-home" aria-selected="true">Ngày</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab-custom" data-toggle="pill" href="#pills-career" role="tab" aria-controls="pills-profile" aria-selected="false">Tuần</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-contact-tab-custom" data-toggle="pill" href="#pills-music" role="tab" aria-controls="pills-contact" aria-selected="false">Tháng</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <canvas id="audience-chart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <p class="card-title">Cân bằng tuần</p>
                                <p class="text-success font-weight-medium">20.15 %</p>
                            </div>
                            <div class="d-flex align-items-center flex-wrap mb-3">
                                <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 mr-3">22.736 USD</h5>
                                <p class="text-muted mb-0">Trung bình phiên</p>
                            </div>
                            <canvas id="balance-chart" height="130"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <p class="card-title">Công việc hôm nay</p>
                                <p class="text-success font-weight-medium">45.39 %</p>
                            </div>
                            <div class="d-flex align-items-center flex-wrap mb-3">
                                <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 mr-3">17.247</h5>
                                <p class="text-muted mb-0">Trung bình phiên</p>
                            </div>
                            <canvas id="task-chart" height="130"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6 grid-margin stretch-card">
            <div class="row w-100 flex-grow">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Tải miền</p>
                            <p class="text-muted">Cập nhật lần cuối: 2 giờ trước</p>
                            <div class="regional-chart-legend d-flex align-items-center flex-wrap mb-1" id="regional-chart-legend"></div>
                            <canvas height="280" id="regional-chart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body pb-0">
                            <div class="d-flex align-items-center mb-4">
                                <p class="card-title mb-0 mr-1">Hoạt động hôm nay</p>
                                <div class="badge badge-info badge-pill">2</div>
                            </div>
                            <div class="d-flex flex-wrap pt-2">
                                <div class="mr-4 mb-lg-2 mb-xl-0">
                                    <p>Thời gian trên trang</p>
                                    <h4 class="font-weight-bold mb-0">77.15 %</h4>
                                </div>
                                <div>
                                    <p>Lượt xem trang</p>
                                    <h4 class="font-weight-bold mb-0">14.15 %</h4>
                                </div>
                            </div>
                        </div>
                        <canvas height="150" id="activity-chart"></canvas>
                    </div>
                </div>
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body pb-0">
                            <p class="card-title">Trạng thái máy chủ 247</p>
                            <div class="d-flex justify-content-between flex-wrap">
                                <p class="text-muted">Cập nhật lần cuối: 2 giờ trước</p>
                                <div class="d-flex align-items-center flex-wrap server-status-legend mt-3 mb-3 mb-md-0">
                                    <div class="item mr-3">
                                        <div class="d-flex align-items-center">
                                            <div class="color-bullet"></div>
                                            <h5 class="font-weight-bold mb-0">128GB</h5>
                                        </div>
                                        <p class="mb-">Tổng dung lượng sử dụng</p>
                                    </div>
                                    <div class="item mr-3">
                                        <div class="d-flex align-items-center">
                                            <div class="color-bullet"></div>
                                            <h5 class="font-weight-bold mb-0">92%</h5>
                                        </div>
                                        <p class="mb-">Sử dụng bộ nhớ</p>
                                    </div>
                                    <div class="item mr-3">
                                        <div class="d-flex align-items-center">
                                            <div class="color-bullet"></div>
                                            <h5 class="font-weight-bold mb-0">16%</h5>
                                        </div>
                                        <p class="mb-">Sử dụng đĩa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <canvas height="170" id="status-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Đánh giá quản lý tài chính</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Người dùng</th>
                                    <th>Tên</th>
                                    <th>Tiến độ</th>
                                    <th>Số tiền</th>
                                    <th>Thời hạn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-1"><img src="images/faces/face1.jpg" alt="image"/></td>
                                    <td>Herman Beck</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>77.99 USD</td>
                                    <td>15 tháng 5, 2015</td>
                                </tr>
                                <tr>
                                    <td class="py-1"><img src="images/faces/face2.jpg" alt="image"/></td>
                                    <td>Messsy Adam</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>245.30 USD</td>
                                    <td>1 tháng 7, 2015</td>
                                </tr>
                                <tr>
                                    <td class="py-1"><img src="images/faces/face3.jpg" alt="image"/></td>
                                    <td>John Richards</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>138.00 USD</td>
                                    <td>12 tháng 4, 2015</td>
                                </tr>
                                <tr>
                                    <td class="py-1"><img src="images/faces/face4.jpg" alt="image"/></td>
                                    <td>Peter Meggik</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>77.99 USD</td>
                                    <td>15 tháng 5, 2015</td>
                                </tr>
                                <tr>
                                    <td class="py-1"><img src="images/faces/face5.jpg" alt="image"/></td>
                                    <td>Edward</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>160.25 USD</td>
                                    <td>3 tháng 5, 2015</td>
                                </tr>
                                <tr>
                                    <td class="py-1"><img src="images/faces/face6.jpg" alt="image"/></td>
                                    <td>John Doe</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>123.21 USD</td>
                                    <td>5 tháng 4, 2015</td>
                                </tr>
                                <tr>
                                    <td class="py-1"><img src="images/faces/face7.jpg" alt="image"/></td>
                                    <td>Henry Tom</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>150.00 USD</td>
                                    <td>16 tháng 6, 2015</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card bg-facebook d-flex align-items-center">
                <div class="card-body py-5">
                    <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                        <i class="mdi mdi-facebook text-white icon-lg"></i>
                        <div class="ml-3 ml-md-0 ml-xl-3">
                            <h5 class="text-white font-weight-bold">2.62 Người đăng ký</h5>
                            <p class="mt-2 text-white card-text">Danh sách của bạn đang phát triển</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card bg-google d-flex align-items-center">
                <div class="card-body py-5">
                    <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                        <i class="mdi mdi-google-plus text-white icon-lg"></i>
                        <div class="ml-3 ml-md-0 ml-xl-3">
                            <h5 class="text-white font-weight-bold">3.4k Người theo dõi</h5>
                            <p class="mt-2 text-white card-text">Danh sách của bạn đang phát triển</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card bg-twitter d-flex align-items-center">
                <div class="card-body py-5">
                    <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                        <i class="mdi mdi-twitter text-white icon-lg"></i>
                        <div class="ml-3 ml-md-0 ml-xl-3">
                            <h5 class="text-white font-weight-bold">3k người theo dõi</h5>
                            <p class="mt-2 text-white card-text">Danh sách của bạn đang phát triển</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row end -->
</div>
@endsection
