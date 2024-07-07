@extends('layout.giasu')

@section('title', 'Đăng nhập tài khoản')

@section('content')


<div class="container pb-5 pt-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 bg-white shadow pt-4 pb-4">
            <h2 class="text-success text-center">Đăng nhập vào tài khoản</h2>
            <hr class="mb-4 mt-3">
            <form action="{{ route('/post-user-dang-nhap') }}" method="post">
                <div class="input-group mt-3">
                    <span class="input-group-text rounded-0 border-black"><i class="fa-regular fa-envelope"></i></span>
                    <input type="text" class="form-control rounded-0 border-black" placeholder="Nhập email" name="email">
                </div>
                <div class="input-group mt-3">
                    <span class="input-group-text rounded-0 border-black"><i class="fa-solid fa-key"></i></span>
                    <input type="password" class="form-control rounded-0 border-black" placeholder="Nhập mật khẩu" name="password">
                </div>
                <div class="row mt-4">
                    <div class="col-6">
                        <button class="btn btn-success" name="gui">Đăng nhập</button>
                    </div>
                    <div class="col-6 text-end">
                        <a href="">Quên mật khẩu</a>
                    </div>
                </div>
              </form>
                <div class="row mt-4">
                    <div class="col-6 text-end">
                        <p>Bạn là thành viên mới?</p>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('/dangky') }}">Tạo tài khoản</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
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
        <div class="col-4"></div>

    </div>


</div>

@endsection
