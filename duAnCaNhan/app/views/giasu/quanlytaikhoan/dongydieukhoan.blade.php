@extends('layout.quanlytaikhoan')

@section('title', 'Đồng ý điều khoản')

@section('content')

    <div class="">
        <form action="{{ route('/postdongydieukhoan') }}" method="POST">
            <h3>Đồng ý với điều khoản</h3>
            @if ($dongYDieuKhoan != 1)
                <p class="mt-5">Tích vào 4 ô bên dưới, sau đó nhấp vào nút "cập nhật" để đồng ý với các điều khoản nhận lớp
                    của
                    GrowGreen: </p>
            @else
                <p class="mt-5">Bạn đã đồng ý với các điều khoản nhận lớp của GrowGreen bao gồm:</p>
            @endif


            <h6 class="mt-5">1. Hợp đồng gia sư</h6>
            <p class="mt-3">Chi tiết hợp đồng xem tại <a href="{{ route('/hopdongmau') }}">Hợp đồng mẫu</a>.</p>
            @if ($dongYDieuKhoan != 1)
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                    <label class="form-check-label">Tôi đã đọc, hiểu rõ, và đồng ý với các điều khoản trong hợp
                        đồng.</label>
                </div>
            @else
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
                    <label class="form-check-label">Tôi đã đọc, hiểu rõ, và đồng ý với các điều khoản trong hợp
                        đồng.</label>
                </div>
            @endif


            <h6 class="mt-5">2. Chính sách học thử </h6>
            <p class="mt-3">Phụ huynh/học viên được quyền kiểm tra trình độ của gia sư qua 2 buổi học đầu tiên, sau 2 buổi
                này:</p>
            <div class="row mt-3">
                <div class="col-11">
                    *Nếu không đồng ý nhận gia sư, phụ huynh/học viên không phải thanh toán học phí;
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-11">
                    *Nếu đồng ý và tiếp tục học, phụ huynh/học viên sẽ thanh toán học phí của cả 2 buổi này cho gia sư.
                </div>
            </div>
            @if ($dongYDieuKhoan != 1)
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" id="check1" name="option2" value="something">
                    <label class="form-check-label">Tôi chấp nhận chính sách này.</label>
                </div>
            @else
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" id="check1" name="option2" value="something" checked>
                    <label class="form-check-label">Tôi chấp nhận chính sách này.</label>
                </div>
            @endif


            <h6 class="mt-5">3. Tuân thủ các chuẩn mực</h6>
            <p class="mt-3">Những chuẩn mực về cách cư xử và hành vi, bao gồm:</p>
            <div class="row mt-3">
                <div class="col-11">
                    *Đi dạy đúng giờ;
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-11">
                    *Đảm bảo lịch học cho học viên;
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-11">
                    *Lễ phép, lịch sự;
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-11">
                    *Giảng dạy nhiệt tình, tận tâm.
                </div>
            </div>
            @if ($dongYDieuKhoan != 1)
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" id="check1" name="option3" value="something">
                    <label class="form-check-label">Tôi sẽ tuân thủ những chuẩn mực trên.</label>
                </div>
            @else
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" id="check1" name="option3" value="something" checked>
                    <label class="form-check-label">Tôi sẽ tuân thủ những chuẩn mực trên.</label>
                </div>
            @endif


            <h6 class="mt-5">4. Hiểu rõ trách nhiệm</h6>

            @if ($dongYDieuKhoan != 1)
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" id="check1" name="option4" value="something">
                    <label class="form-check-label">Tôi đã đủ (hoặc trên) 18 tuổi, hiểu rõ những trách nhiệm của mình khi
                        nhận
                        lớp.</label>
                </div>
            @else
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" id="check1" name="option4" value="something" checked>
                    <label class="form-check-label">Tôi đã đủ (hoặc trên) 18 tuổi, hiểu rõ những trách nhiệm của mình khi
                        nhận
                        lớp.</label>
                </div>
            @endif

            @if ($dongYDieuKhoan != 1)
                <div class="text-end">
                    <button class="btn btn-secondary mt-4" name="huy">Hủy</button>
                    <button class="btn btn-primary mt-4" name="gui">Cập nhật</button>
                </div>
            @else
                <div class="text-end">
                    <button class="btn btn-primary mt-4">Bạn đã đồng ý các điều khoản</button>
                </div>
            @endif


        </form>
        <div class="row">
            <div class="col-7">
                @if (isset($_SESSION['errors']) && isset($_GET['msg']))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($_SESSION['errors'] as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>

    </div>


@endsection
