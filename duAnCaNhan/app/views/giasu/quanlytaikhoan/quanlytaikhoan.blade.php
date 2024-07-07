@extends('layout.quanlytaikhoan')

@section('title', 'Quản lý tài khoản')



@section('content')

    <div class="container shadow pt-4 ps-5 rounded-4 pb-4">
        <h5>Hồ sơ thông tin</h5>
        <hr>
        @if ($hoSoThongTinDayDu != 1)
            <p class="text-danger"> Thông tin của bạn đang còn thiếu. Hãy cập nhật đầy đủ. (Chưa điền)</p>
        @else
            <p class="text-success">Tuyệt vời! Thông tin của bạn đã được cập nhật đầy đủ.</p>
        @endif
        <nav class="navbar">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('/hosothongtin') }}"><i class="fa-solid fa-caret-right"></i><span
                                class="text-primary">
                                Thông tin cơ bản </span>
                            @if ($hoSoThongTinDayDu != 1)
                                <i class="fa-solid fa-circle-exclamation text-danger"></i>
                            @else
                                <i class="fa-solid fa-check text-success"></i>
                            @endif
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container shadow  pt-4 ps-5 rounded-4 mt-5 pb-4">
        <h5>Đồng ý với các điều khoản</h5>
        <hr>
        @if ($dongYDieuKhoan != 1)
            <p class="text-danger"> Bạn cần đồng ý với các điều khoản để có thể nhận lớp tại GrowGreen.</p>
            <a href="{{ route('/dongydieukhoan') }}" class="btn btn-outline-primary">Bắt đầu ngay</a>
        @else
            <p>Bạn đã đồng ý với các điều khoản nhận lớp tại GrowGreen. <a href="{{ route('/dongydieukhoan') }}">Xem chi
                    tiết</a></p>
        @endif
        <nav class="navbar">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('/dongydieukhoan') }}"><i
                                class="fa-solid fa-caret-right"></i><span class="text-primary"> Hợp đồng gia sư </span>
                            @if ($dongYDieuKhoan != 1)
                                <i class="fa-solid fa-circle-exclamation text-danger"></i>
                            @else
                                <i class="fa-solid fa-check text-success"></i>
                            @endif
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('/dongydieukhoan') }}"><i
                                class="fa-solid fa-caret-right"></i><span class="text-primary"> Chính sách học thử </span>
                            @if ($dongYDieuKhoan != 1)
                                <i class="fa-solid fa-circle-exclamation text-danger"></i>
                            @else
                                <i class="fa-solid fa-check text-success"></i>
                            @endif
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('/dongydieukhoan') }}"><i
                                class="fa-solid fa-caret-right"></i><span class="text-primary"> Tuân thủ các chuẩn mực
                            </span>
                            @if ($dongYDieuKhoan != 1)
                                <i class="fa-solid fa-circle-exclamation text-danger"></i>
                            @else
                                <i class="fa-solid fa-check text-success"></i>
                            @endif
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('/dongydieukhoan') }}"><i
                                class="fa-solid fa-caret-right"></i><span class="text-primary"> Hiểu rõ trách nhiệm
                            </span>
                            @if ($dongYDieuKhoan != 1)
                                <i class="fa-solid fa-circle-exclamation text-danger"></i>
                            @else
                                <i class="fa-solid fa-check text-success"></i>
                            @endif
                        </a>
                    </li>
            </div>
        </nav>
    </div>
    <div class="container shadow pt-4 ps-5 rounded-4 mt-5 pb-4">
        <h5>Đào tạo</h5>
        <hr>
        @if ($xuLyTinhHuong != 1)
            <p class="text-danger"> Bạn cần hoàn thành bài đào tạo về cách xử lý tình huống sau khi nhận lớp tại GrowGreen.
            </p>
            <a href="{{ route('/xulytinhhuong') }}" class="btn btn-outline-primary">Bắt đầu ngay</a>
        @else
        @endif


        <nav class="navbar">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('/xulytinhhuong') }}"><i
                                class="fa-solid fa-caret-right"></i><span class="text-primary"> Xử lý tình huống </span>
                            @if ($xuLyTinhHuong != 1)
                                <i class="fa-solid fa-circle-exclamation text-danger"></i>
                            @else
                                <i class="fa-solid fa-check text-success"></i>
                            @endif
                        </a>
                    </li>
            </div>
        </nav>
    </div>

    <div class="container shadow pt-4 ps-5 rounded-4 mt-5 pb-4">
        <h5>Lớp đã nhận</h5>
        <hr>
        <p class="">Ồ không! Bạn chưa nhận lớp nào tại GrowGreen.

        </p>
        <a href="{{ route('/danhsachlopmoi') }}" class="btn btn-outline-primary">Xem danh sách lớp mới</a>

    </div>


@endsection
