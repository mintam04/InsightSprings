@extends('layout.giasu')

@section('title', 'Đăng ký note nhận lớp')

@section('content')


<div class="container pb-5 pt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 bg-white shadow pt-4 pb-4">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <h3 class="text-blue-900">Note nhận lớp {{$courses->code}} </h3>
                    <div class="row">
                        <div class="col-1">
                            <i class="fa-solid fa-book text-secondary fa-sm"></i>
                        </div>
                        <div class="col-11">
                            <p class="card-title text fw-bold"><b>{{$courses->subject}} - Lớp {{$courses->class}}</b></p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-1">
                            <i class="fa-solid fa-location-dot text-secondary fa-sm"></i>
                        </div>
                        <div class="col-11">
                            <p class="card-title text">{{$courses->address}}, {{$courses->district}}, Hà Nội </p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-1">
                            <i class="fa-solid fa-user  fa-sm"></i>
                        </div>
                        <div class="col-11">
                            <p class="card-title text">Mã gia sư của bạn: {{$_SESSION['user']->id}}</p>
                        </div>
                    </div>
                    <p class="mt-4">Lớp D5726 có phí nhận lớp là {{ $courses->fee * 0.4 }} ₫</p>
                    <p  class="mt-4"><b>Theo hình thức này, có 3 bước được thực hiện:</b></p>
                    <div class="row mt-2">
                        <div class="col-1">
                            1.
                        </div>
                        <div class="col-11">
                            <p class="card-title text">Trung tâm sẽ liên hệ với phụ huynh. Nếu được chấp nhận:</p>
                        </div>
                    </div><div class="row mt-2">
                        <div class="col-1">
                            2.
                        </div>
                        <div class="col-11">
                            <p class="card-title text">Bạn sẽ chuyển khoản cho trung tâm số tiền: <b>{{ $courses->fee * 0.4 }}</b> ₫</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-1">
                            3.
                        </div>
                        <div class="col-11">
                            <p class="card-title text">Trung tâm gửi hợp đồng và thông tin liên hệ của phụ huynh cho bạn qua Zalo với số điện thoại: <b>{{ $_SESSION['teacher']->phone_number }}</b></p>
                        </div>
                    </div>
                    <p  class="mt-4">Như vậy, nhận lớp Online sẽ không hỗ trợ gia sư nợ phí</p>
                    <form method="POST" action="{{route('/postnotenhanlop')}}">
                        @csrf
                        <input type="hidden" name="course_id" value="{{ $courses->id }}">
                        <input type="hidden" name="teacher_id" value="{{ $_SESSION['teacher']->id }}">
                        
                        <button type="submit" class="btn btn-warning mt-4 text-white">Đăng ký nhận lớp</button>
                    </form>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>

</div>


@endsection
