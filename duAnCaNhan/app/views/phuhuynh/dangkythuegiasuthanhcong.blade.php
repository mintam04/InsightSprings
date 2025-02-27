@extends('layout.trangchu')

@section('title', 'Đăng ký thuê gia sư thành công')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 style="color: green">Đăng ký thành công</h1>
            <p class="mt-3">Cảm ơn bạn đã đăng ký thuê gia sư tại GrowGreen.</p>
            <p class="mt-3">Chúng tôi sẽ gọi lại tư vấn cho bạn trong khung giờ làm việc từ 8h-12h & 13h30-17h30, thứ 2-6. Mong bạn vui lòng để ý điện thoại.</p>
            <p class="mt-3">Số điện thoại hỗ trợ: 0967-6666-40</p>

           <a href="{{ route('/')}}" class="btn btn-primary">Quay về trang chủ</a>
        </div>
        <div class="col-3"></div> 
    </div>
</div>




    

@endsection

    