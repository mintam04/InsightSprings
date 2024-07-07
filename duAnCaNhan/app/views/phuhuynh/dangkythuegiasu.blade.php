@extends('layout.trangchu')

@section('title', 'Đăng ký thuê gia sư')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
           <h1>Đăng ký thuê gia sư</h1>
           <hr>
           <p>Số điện thoại hỗ trợ: 0967-6666-40</p>
           <form action="{{route('/postparents')}}" method="post">
                <div class="d-flex">
                    <div class="form-check me-3">
                        <input type="radio" class="form-check-input" id="radio1" name="sex_parents" value="Anh" checked>Anh 
                        <label class="form-check-label" for="radio1"></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio1" name="sex_parents" value="Chị" checked>Chị
                        <label class="form-check-label" for="radio1"></label>
                    </div>
                </div>

                <input type="text" class="form-control mt-3 border-1 border-dark" placeholder="Họ và tên" name="name">
                <input type="text" class="form-control mt-3 border-1 border-dark" placeholder="Số điện thoại" name="phone">
                <input type="text" class="form-control mt-3 border-1 border-dark" placeholder="Số nhà, tên đường" name="address">
                <input type="text" class="form-control mt-3 border-1 border-dark" placeholder="Ghi chú (không bắt buộc)" name="take_note">

                <div class="text-end">
                    <button class="btn btn-primary mt-5" name="gui">Đăng ký ngay</button>
                </div>
           </form>
           <hr>
           <p>Sau khi bạn đăng ký, chúng tôi sẽ gọi lại cho bạn để trao đổi thêm những thông tin cần thiết khác. Tất cả thông tin của bạn sẽ được bảo mật.</p>
        </div>
        <div class="col-3"></div> 
    </div>
</div>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
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
    <div class="col-3"></div>

</div>



    

@endsection

    