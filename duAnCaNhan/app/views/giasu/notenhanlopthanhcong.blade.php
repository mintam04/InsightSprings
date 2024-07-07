@extends('layout.giasu')

@section('title', 'Note nhận lớp')

@section('content')


<div class="container pb-5 pt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 bg-white shadow pt-4 pb-4">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <h3 class="text-blue-900">Note nhận lớp {{$courses->code}}</h3>
                    <div class="row mt-2">
                        <div class="col-1">
                            <i class="fa-solid fa-user  fa-sm"></i>
                        </div>
                        <div class="col-11">
                            <p class="card-title text">Mã gia sư của bạn: <span style="color: green"> {{$_SESSION['user']->id}}</span></p>
                        </div>
                    </div>
                    <h4 class="text-sucses mt-4" style="color: green">Đăng ký thành công</h4>
                    <p class="mt-3">Lớp {{$courses->code}}: {{$courses->subject}} Lớp {{$courses->class}} tại {{$courses->address}}, {{$courses->district}}, Hà Nội.</p>
                    <a href="{{ route('/chitietlop'.'/'.$courses->id) }}">Xem lại thông tin lớp</a>
                    <p class="mt-3">GrowGreen sẽ xem xét thông tin và phản hồi lại cho bạn. Quá trình này có thể kéo dài đến vài ngày.</p>
                    <p class="mt-3"><b>Lưu ý: </b>Không phải gia sư nào cũng được nhận lớp, sẽ luôn có nhiều gia sư đăng ký cho 1 lớp. Những gia sư có lịch sử nhận lớp tốt và mức độ phù hợp cao sẽ được ưu tiên hơn.</p>
                    <p class="mt-3">Bạn có thể xem các note nhận lớp mà bạn đã tạo tại <a href="{{ route('/quanlynotenhanlop') }}">Quản lí note nhận lớp</a></p>
                    <p class="mt-3"><b>Tạo nhiều note nhận lớp hơn</b> sẽ tăng xác suất được nhận lớp: Khi bạn không được nhận lớp này, thì vẫn đang còn các lớp khác dành cho bạn.</p>


                    <a href="{{ route('/danhsachlopmoi') }}" class="btn btn-primary">Xem danh sách lớp mới</a>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>

</div>


@endsection
