<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trang chủ')</title>
    <link rel="stylesheet" href="/duAnCaNhan/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/duAnCaNhan/public/css/style.css">
    <script src="/duAnCaNhan/public/js/bootstrap.bundle.min.js"></script>
    <script src="/duAnCaNhan/public/js/font-fontawesome-ae333ffef2.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-sm bg-blue-900">
        <div class="container">
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="navbar-brand text-white" href="#">
                        <img src="http://localhost/duAnCaNhan/public/img/logo.png" alt="" width="100" height="100"><b>Insight Springs</b>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item me-4">
                    <a class="text-dark btn btn-light" href="{{ route('/tongquan') }}"><b>Dành cho gia sư</b></a>
                </li>
                <li class="nav-item me-4">
                    <a class="text-dark btn btn-warning" href="{{ route('/dangkythuegiasu') }}"><b>Đăng ký thuê gia sư</b></a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link text-white" href=""><i class="fa-solid fa-phone-volume"></i><b> Hot line:
                            098-326-4473</b></a>
                </li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-sm bg-light shadow mb-4">
        <div class="container">
            <!-- Links -->
            <ul class="navbar-nav">
                <!-- Navigation links -->
                <ul class="navbar-nav">
                    <li class="nav-item me-5">
                        <a class="nav-link" href="{{ route('/') }}"><b>Trang chủ</b></a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="{{ route('/gioithieu') }}"><b>Giới thiệu</b></a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="{{ route('/dichvu') }}"><b>Dịch vụ</b></a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="{{ route('/danhsachlopmoi') }}"><b>Danh sách lớp mới</b></a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="{{ route('/lienhe') }}"><b>Liên hệ</b></a>
                    </li>
                </ul>


            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <div class="container-fluid bg-blue-500 text-blue-900 mt-4">
        <div class="row pt-4">
            <div class="col-1"></div>
            <div class="col-3">
                <p style="font-size: 20px;" class="text-decoration-underline"><b>Liên hệ với chúng tôi</b></p>
                <p><i class="fa-solid fa-location-dot fa-lg"></i> Số 12 Trần Phú, quận Hoàng Mai, Hà Nội</p>
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
