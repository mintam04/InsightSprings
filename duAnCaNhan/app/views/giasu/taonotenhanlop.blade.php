@extends('layout.giasu')

@section('title', 'Tạo note nhận lớp')

@section('content')
<div class="container pb-5 pt-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 bg-white shadow pt-4 pb-4">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <h3 class="text-blue-900">Tạo Note nhận lớp</h3>
                    <form action="{{ route('/loaddulieu') }}" method="POST">
                        @csrf
                        <div class="row mt-4 pb-5">
                            <div class="col-7">
                                <input type="text" name="course_code" class="form-control border-black rounded-0" placeholder="Nhận mã lớp">
                            </div>
                            <div class="col-5">
                                <button type="submit" class="input-group-text bg-primary text-white">Load dữ liệu</button>
                            </div>
                        </div>
                    </form>
                    <p>Nhập mã lớp mà bạn muốn nhận, sau đó nhấn vào nút Load dữ liệu.</p>
                    <p>Hoặc bạn có thể truy cập vào trang <a href="{{ route('danhsachlopmoi') }}">Danh sách lớp mới</a>, nhấp vào nút [Xem chi tiết] lớp mà bạn muốn nhận, sau đó nhấp vào nút [Đăng ký nhận lớp].</p>
                    <a href="{{ route('danhsachlopmoi') }}" class="btn btn-primary">Xem danh sách lớp mới</a>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>
@endsection
