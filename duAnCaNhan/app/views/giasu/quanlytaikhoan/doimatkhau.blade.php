@extends('layout.quanlytaikhoan')

@section('title', 'Đổi mật khẩu')

@section('content')
<div class="row">
    <div class="col-3"></div>
    <div class="col-6 bg-white shadow pt-4 pb-4">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <h3 class="text-blue-900 mt-3 pb-4">Thay đổi mật khẩu</h3>
                <form>
                    <p>Nhập mật khẩu cũ của bạn</p>
                    <div class="input-group pb-4">
                        <span class="input-group-text rounded-0 border-black"><i class="fa-solid fa-key"></i></span>
                        <input type="text" class="form-control rounded-0 border-black" placeholder="Nhập mật khẩu cũ">
                    </div>
                    <p>
                        Nếu bạn đã quên mật khẩu cũ, hãy <a href="">Đăng xuất</a>, sau đó đến trang [Đăng nhập],
                        nhấp vào phần [Quên mật khẩu].
                    </p>
                    <div class="input-group mt-4 pb-4">
                        <span class="input-group-text rounded-0 border-black"><i class="fa-solid fa-key"></i></span>
                        <input type="text" class="form-control rounded-0 border-black" placeholder="Tạp mật khẩu mới">
                    </div>
                    <div class="input-group pb-4">
                        <span class="input-group-text rounded-0 border-black"><i class="fa-solid fa-key"></i></span>
                        <input type="text" class="form-control rounded-0 border-black" placeholder="Xác nhận mật khẩu mới">
                    </div>

                </form>
                <div class="text-end">
                    <button class="btn btn-success">Thay đổi</button>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <div class="col-3"></div>
</div>

@endsection
