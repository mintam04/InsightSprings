<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$loggedIn = isset($_SESSION['user']);

// if ($loggedIn && isset($_SESSION['user'])) {
//     echo '<pre>';
//     print_r($_SESSION['user']);
//     echo '</pre>';
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trang chủ')</title>
    <link rel="stylesheet" href="/duAnCaNhan/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/duAnCaNhan/public/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="/duAnCaNhan/public/js/bootstrap.bundle.min.js"></script>
    <script src="/duAnCaNhan/public/js/font-fontawesome-ae333ffef2.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>


</head>

<body>
    <div class="container-fluid bg-blue-500">
        <div class="container">
            Nội dung này dành riêng cho gia sư. Nếu bạn là phụ huynh hoặc học viên, hãy đến phần: <a href="{{ route('/dangkythuegiasu') }}">Nội
                dung
                dành cho khách hàng</a>.
        </div>
    </div>
    <nav class="navbar navbar-expand-sm bg-blue-900">
        <div class="container">
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="navbar-brand text-white" href="#">
                        <img src="http://localhost/duAnCaNhan/public/img/logo.png" alt="" width="100"
                            height="100"><b>Insight Springs</b>
                    </a>
                </li>
            </ul>
            <?php if ($loggedIn): ?>
            <ul class="navbar-nav">
                <li class="nav-item me-4">
                    <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle text-light" data-bs-toggle="dropdown">
                            <b><i class="fa-regular fa-circle-user fa-2xl"></i> <?php echo $_SESSION['user']->name; ?></b>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Mã gia sư: <?php echo $_SESSION['user']->id; ?></a></li>
                            <li><a class="dropdown-item" href="{{ route('/doimatkhau') }}">Đổi mật khẩu</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item me-4">
                    <a class="text-light btn btn-primary border-4" href="{{ route('/quanlytaikhoan') }}"><b>Quản lý tài
                            khoản</b></a>
                </li>
                <li class="nav-item me-4">
                    <a class="text-light btn btn-outline-light border-3" href="{{ route('/dangxuat') }}"><b>Đăng
                            xuất</b></a>
                </li>
            </ul>
            <?php else: ?>
            <ul class="navbar-nav">
                <li class="nav-item me-4">
                    <a class="text-light btn btn-primary border-4" href="{{ route('/dangky') }}"><b>Đăng ký làm gia
                            sư</b></a>
                </li>
                <li class="nav-item me-4">
                    <a class="text-light btn btn-outline-light border-3" href="{{ route('/dangnhap') }}"><b>Đăng nhập
                            vào tài khoản</b></a>
                </li>
            </ul>
            <?php endif; ?>



        </div>
    </nav>
    <nav class="navbar navbar-expand-sm bg-light shadow mb-4">
        <div class="container">
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item me-5">
                    <a class="nav-link" href="{{ route('/') }}"><b>Trang chủ</b></a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link" href="{{ route('/tongquan') }}"><b>Tổng quan </b></a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link" href="{{ route('/danhsachlopmoi') }}"><b>Danh sách lớp mới</b></a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link" href="{{ route('/cachthucnhanlop') }}"><b>Cách thức nhận lớp</b></a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link" href="{{ route('/chinhsachhoanphi') }}"><b>Chính sách hoàn phí</b></a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link" href="{{ route('/hopdongmau') }}"><b>Hợp đồng mẫu</b></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <div class="container-fluid bg-blue-500 text-blue-900 mt-4">
        <div class="row pt-4">
            <div class="col-1"></div>
            <div class="col-3">
                <p style="font-size: 20px;" class="text-decoration-underline"><b>Liên hệ với chúng tôi</b></p>
                <p><i class="fa-solid fa-location-dot fa-lg"></i> Số 25 Hoa Bằng, quận Cầu Giấy, Hà Nội</p>
                <p><i class="fa-solid fa-phone fa-lg"></i> 098-326-4473</p>
                <p><i class="fa-solid fa-envelope fa-lg"></i> contact@insightsprings.edu.vn</p>
            </div>
            <div class="col-1"></div>
            <div class="col-2">
                <p style="font-size: 20px;" class="text-decoration-underline"><b>Về Insight Springs</b></p>
                <a class="nav-link text-blue-900" href="#">Giới thiệu</a>
                <a class="nav-link text-blue-900" href="#">Liên hệ</a>
                <a class="nav-link text-blue-900" href="#">Chính sách bảo mật</a>
                <a class="nav-link text-blue-900" href="#">Đăng ký thuê gia sư</a>
            </div>
            <div class="col-4 text-end">
                <p style="font-size: 20px;" class="text-decoration-underline"><b>Kết nối Insight Springs</b></p>
                <a class="nav-link text-blue-900" href="#"><b>Dành cho khách hàng: </b> <i
                        class="fa-brands fa-square-facebook"> </i> InsightSprings Education</a>
                <a class="nav-link text-blue-900" href="#"><b>Dành cho giá sư: </b><i
                        class="fa-brands fa-square-facebook text-success"></i> Gia sư InsightSprings </a>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <div class="bg-blue-900 border-top text-center pt-3 pb-3 text-white">
        Coppyright 2024 by mintam
    </div>
</body>

</html>
