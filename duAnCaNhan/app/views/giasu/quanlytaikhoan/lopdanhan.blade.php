@extends('layout.quanlytaikhoan')

@section('title', 'Hồ sơ thông tin')

@section('content')
    <div class="">
        <h1>Danh sách lớp đã nhận</h1>
        @foreach ($course_teacher as $cs)
            @if($cs->status_ct == 1)
                <div class="row mt-5">
                    <div class="col-1 text-end">
                        <i class="fa-solid fa-book text-secondary fa-sm mt-3"></i>
                    </div>
                    <div class="col-11">
                        <p>Lớp {{$cs->code}}: {{$cs->subject}} - Lớp {{$cs->class}}, tại {{$cs->address}}, {{$cs->district}}, Hà Nội<p>
                        <p>{{$cs->updated_at}}</p>
                        <p>Tình trạng: 
                            <b>
                                Bạn đã nhận lớp này
                            </b>
                        </p>
                        Xem  <a href="{{route('/danhsachlopmoi')}}">danh sách lớp mới</a>
                    </div>
                </div>
            @endif

        @endforeach

        <a href="{{ route('/danhsachlopmoi') }}" class="btn btn-outline-primary mt-5">Xem danh sách lớp mới</a>
    </div>

@endsection
