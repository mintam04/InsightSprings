@extends('layout.quanlytaikhoan')

@section('title', 'Quản lý note nhận lớp')
{{-- @php
if (isset($course_teacher)) {
    echo '<pre>';
    print_r($course_teacher);
    echo '</pre>';
}


@endphp --}}
@section('content')

    <div class="">
        <h3>Quản lý note nhận lớp</h3>
        <p>Chỉ hiển thị các note nhận lớp mà bạn đã tạo trong vòng 60 ngày.</p>

        <p>Ồ! Hiện tại bạn chưa có note nhận lớp nào ở dạng đang chờ phản hồi.</p>
        <p>Hãy đến trang danh sách lớp mới và tạo note nhận lớp. </p>

        <button class="btn btn-primary">Đến trang danh sách lớp mới</button>

        @foreach($course_teacher as $cs)
            <div class="row mt-5">
                <div class="col-1 text-end">
                    <i class="fa-solid fa-book text-secondary fa-sm mt-3"></i>
                </div>
                <div class="col-11">
                    <p>Lớp {{$cs->code}}: {{$cs->subject}} - Lớp {{$cs->class}}, tại {{$cs->address}}, {{$cs->district}}, Hà Nội<p>
                    <p>{{$cs->updated_at}}</p>
                    <p>Tình trạng: 
                        <b>
                            @if($cs->status_ct == 1)
                            Bạn đã nhận lớp này
                            @else
                                {{$cs->status}}
                            @endif
                        </b>
                    </p>
                    Xem  <a href="{{route('/danhsachlopmoi')}}">danh sách lớp mới</a>
                </div>
            </div>
        

       @endforeach
    </div>


@endsection

