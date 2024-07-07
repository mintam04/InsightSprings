@extends('layout.giasu')

@section('title', 'Danh sách lớp mới')

@section('content')
<div class="container pb-5">
    <div class="row pt-5 pb-5">
        <div class="col-4">
            <h1>Danh sách lớp mới</h1>
        </div>
        <div class="col-2 mt-3">
            <p>(Đang có {{ count($courses) }} lớp)</p>
        </div>

    </div>
    <div class="input-group">
        <input type="text" class="form-control" name="search" placeholder="Tìm kiếm lớp gia sư..." aria-label="Input group example" aria-describedby="btnGroupAddon">
        <div class="input-group-text bg-success text-white" id="btnGroupAddon">
            <button type="submit" class="input-group-text bg-success text-white"><b><i class="fa-solid fa-magnifying-glass"></i> Tìm kiếm</b></button>
        </div>
    </div>
    <div class="mt-4 text-blue-900">
        <h4><i class="fa-solid fa-filter"></i> Bộ lọc</h4>
    </div>
    <div class="row">
        <div class="col-3">
            @include('layout.dropdown', [
                'buttonLabel' => 'Chọn môn học',
                'name' => 'subject',
                'items' => ['Toán học', 'Vật lý', 'Hóa học', 'Sinh học', 'Khoa học tự nhiên', 'Ngữ văn', 'Tiếng anh']
            ])
        </div>
        <div class="col-2">
            @include('layout.dropdown', [
                'buttonLabel' => 'Chọn cấp học',
                'name' => 'class',
                'items' => ['Cấp 1', 'Cấp 2', 'Cấp 3', 'Người đi làm']
            ])
        </div>
        <div class="col-2">
            @include('layout.dropdown', [
                'buttonLabel' => 'Chọn yêu cầu',
                'name' => 'requirement',
                'items' => ['Sinh viên', 'Giáo viên']
            ])
        </div>
        <div class="col-3">
            @include('layout.dropdown', [
                'buttonLabel' => 'Chọn khu vực',
                'name' => 'district',
                'items' => [
                    'Quận Ba Đình', 'Quận Bắc Từ Liêm', 'Quận Cầu Giấy', 'Quận Đống Đa', 'Quận Hà Đông', 'Quận Hai Bà Trưng', 'Quận Hoàn Kiếm', 'Quận Hoàng Mai', 
                    'Quận Long Biên', 'Quận Nam Từ Liêm', 'Quận Tây Hồ', 'Quận Thanh Xuân', 'Huyện Đan Phượng', 'Huyện Đông Anh', 'Huyện Gia Lâm', 'Huyện Hoài Đức', 
                    'Huyện Mê Linh', 'Huyện Mỹ Đức', 'Huyện Phú Xuyên', 'Huyện Phúc Thọ', 'Huyện Quốc Oai', 'Huyện Sóc Sơn', 'Huyện Thạch Thất', 'Huyện Thanh Oai', 
                    'Huyện Thanh Trì', 'Huyện Thường Tín', 'Huyện Ứng Hòa', 'Huyện Ba Vì'
                ]
            ])
        </div>
        <div class="col-2">
            <button type="submit" class="btn btn-warning"><i class="fa-solid fa-filter"></i> Tiến hành lọc</button>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach($courses as $c)
        <div class="col-3 mt-4">
            <div class="card">
                <div class="card-header bg-blue-900 text-white">
                    {{$c->code}}
                </div>
                <div class="card-body">
                    <div class="" style="height: 180px">
                        <div class="row">
                            <div class="col-1">
                                <i class="fa-solid fa-book text-secondary fa-sm"></i>
                            </div>
                            <div class="col-11">
                                <p class="card-title text fw-bold">{{$c->subject}} - Lớp {{$c->class}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <i class="fa-solid fa-location-dot text-secondary fa-sm"></i>
                            </div>
                            <div class="col-11">
                                <p class="card-title text">{{$c->address}}, {{$c->district}}, Hà Nội </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <i class="fa-solid fa-dollar-sign text-secondary fa-sm"></i>
                            </div>
                            <div class="col-11">
                                <p class="card-title text">{{$c->fee / $c->sessions_week }} ₫/buổi, {{$c->sessions_week }} buổi/tuần</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <i class="fa-regular fa-bookmark text-secondary fa-sm"></i>
                            </div>
                            <div class="col-11">
                                <p class="card-title text">Yêu cầu:  {{$c->request }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <a href="{{ route('/chitietlop'.'/'.$c->id) }}" class="btn btn-success">Xem chi tiết <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


    </div>


</div>



@endsection


