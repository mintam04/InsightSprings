@extends('layout.giasu')

@section('title', 'Tổng quan')

@section('content')

<div class="container pb-5">
    <div class="row pt-5">
        <div class="col-6">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Tìm kiếm lớp gia sư..."
                    aria-label="Input group example" aria-describedby="btnGroupAddon">
                <div class="input-group-text bg-success text-white" id="btnGroupAddon"><b><i
                            class="fa-solid fa-magnifying-glass"></i> Tìm kiếm</b></div>
            </div>
        </div>
        <div class="col-6">
            <div class="row d-flex align-items-center">
                <div class="col-5">
                    <span style="font-size: 25px;"><b>Đang có 47 lớp mới</b></span>
                </div>
                <div class="col-7">
                    <a href="{{ route('/danhsachlopmoi') }}" class="nav-link text-primary"><i class="fa-solid fa-caret-right"></i> Xem tất cả các lớp mới</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4 text-blue-900">
        <h4><i class="fa-solid fa-filter"></i> Bộ lọc</h4>
    </div>

    <div class="row">
            <div class="col-3">
                <div class="dropdown" >
                    <button class="btn btn-outline-secondary rounded-0 text-start d-flex align-items-center" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="width: 325px;">
                        Chọn môn học
                    <i class="fa-solid fa-caret-down ms-auto"></i>
                    </button>
                    <ul class="dropdown-menu rounded-0" aria-labelledby="dropdownMenuButton" style="width: 325px;">
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox1" >
                                <label class="form-check-label ms-2" for="checkbox1">
                                    Toán học
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Vật lý
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox3">
                                <label class="form-check-label ms-2" for="checkbox3">
                                    Hóa học
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox3">
                                <label class="form-check-label ms-2" for="checkbox3">
                                    Sinh học
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox3">
                                <label class="form-check-label ms-2" for="checkbox3">
                                    Khoa học tự nhiên
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox3">
                                <label class="form-check-label ms-2" for="checkbox3">
                                    Ngữ văn
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox3">
                                <label class="form-check-label ms-2" for="checkbox3">
                                    Tiếng anh
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-2">
                <div class="dropdown" >
                    <button class="btn btn-outline-secondary rounded-0 text-start d-flex align-items-center" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"  style="width: 215px;">
                        Chọn cấp học
                    <i class="fa-solid fa-caret-down ms-auto"></i>
                    </button>
                    <ul class="dropdown-menu rounded-0" aria-labelledby="dropdownMenuButton"  style="width: 215px;">
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox1" >
                                <label class="form-check-label ms-2" for="checkbox1">
                                    Cấp 1
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Cấp 2
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox3">
                                <label class="form-check-label ms-2" for="checkbox3">
                                    Cấp 3
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox3">
                                <label class="form-check-label ms-2" for="checkbox3">
                                    Người đi làm
                                </label>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-2">
                <div class="dropdown" >
                    <button class="btn btn-outline-secondary rounded-0 text-start d-flex align-items-center" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="width: 215px;">
                        Chọn yêu cầu
                    <i class="fa-solid fa-caret-down ms-auto"></i>
                    </button>
                    <ul class="dropdown-menu rounded-0" aria-labelledby="dropdownMenuButton" style="width: 215px;">
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox1" >
                                <label class="form-check-label ms-2" for="checkbox1">
                                    Sinh viên
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Giáo viên
                                </label>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
            <div class="col-3">
                <div class="dropdown" >
                    <button class="btn btn-outline-secondary rounded-0 text-start d-flex align-items-center" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="width: 325px;">
                        Chọn khu vực
                    <i class="fa-solid fa-caret-down ms-auto"></i>
                    </button>
                    <ul class="dropdown-menu rounded-0" aria-labelledby="dropdownMenuButton" style="width: 325px;">
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox1" >
                                <label class="form-check-label ms-2" for="checkbox1">
                                    Quận Ba Đình
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Quận Bắc Từ Liêm
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Quận Cầu Giấy
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Quận Đống Đa
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Quận Hà Đông
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Quận Hai Bà Trưng
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Quận Hoàn Kiếm
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Quận Hoàng Mai
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Quận Long Biên
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Quận Nam Từ Liêm
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Quận Tây Hồ
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Quận Thanh Xuân
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Huyện Đan Phượng
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Huyện Đông Anh
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Huyện Gia Lâm
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Huyện Hoài Đức
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Huyện Mê Linh
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Huyện Mỹ Đức
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Huyện Phú Xuyên
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Huyện Phúc Thọ
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Huyện Quốc Oai
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Huyện Sóc Sơn
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Huyện Thạch Thất
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Huyện Thanh Oai
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Huyện Thanh Trì
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Huyện Thường Tín
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Huyện Ứng Hòa
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label ms-2" for="checkbox2">
                                    Huyện Ba Vì
                                </label>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-2">
                <button class="btn btn-warning"><i class="fa-solid fa-filter"></i> Tiến hành lọc</button>
            </div>
    </div>
</div>
<div class="container-fluid bg-blue-500 mt-5">
    <div class="container">
        <div class="row" style="height: 425px;">
            <div class="col-3" style="padding-top: 45px;">
                <img src="http://localhost/duAnCaNhan/public/img/5.jpg" alt="" style="height: 300px;">
            </div>
            <div class="col-3"></div>
            <div class="col-5 text-center" style="padding-top: 100px;">
                <h3>Gia tăng thu nhập bằng kiến thức và kỹ năng giảng dạy của bạn</h3>
                <div style="margin-top: 25px;">
                    <p>Mức thu nhập hấp dẫn, từ 120.000đ - 400.000đ / 1 buổi dạy.</p>
                </div>
                <a href="" class="btn btn-outline-primary rounded-0" style="margin-top: 25px;">Đăng ký làm gia sư ngay <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="row" style="height: 550px;">
            <div class="col-1"></div>
            <div class="col-3" style="padding-top: 80px;">
                <img src="http://localhost/duAnCaNhan/public/img/4.jpg" alt="">
            </div>
            <div class="col-7" style="padding-top: 80px;">
                <h2>Nhận lớp tại Insights Springs với 3 bước:</h2>
                <div style="margin-top: 25px;">
                    <h5>1. Tìm lớp phù hợp</h5>
                    <p>Có quá nhiều lớp. Không sao cả! Sử dụng công cụ tìm kiếm hoặc bộ lọc sẽ giúp bạn dễ dàng lựa chọn lớp phù hợp.</p>
                    <p>Đến trang <a href="{{ route('/danhsachlopmoi') }}">Danh sách lớp mới</a></p>
                </div>
                <div style="margin-top: 25px;">
                    <h5>2. Tạo note nhận lớp</h5>
                    <p>Sau khi đã xem chi tiết lớp, hãy nhấp vào nút [Đăng ký nhận lớp]. Phần tiếp theo rất đơn giản, các công cụ của website sẽ hướng dẫn chi tiết cho bạn.</p>
                    <p>Nếu bạn đã có mã lớp mà bạn muốn nhận, truy cập vào trang <a href="{{ route('/taonotenhanlop') }}"> Tạo note nhận lớp</a>.</p>
                </div>
                <div style="margin-top: 25px;">
                    <h5>3. Phỏng vấn nhận lớp </h5>
                    <p>Insights Springs muốn hiểu rõ hơn về bạn. Các phương thức có thể bao gồm gọi điện thoại hoặc phỏng vấn trực tiếp tại trung tâm.</p>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</div>


@endsection
