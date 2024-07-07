@extends('layout.giasu')

@section('title', 'Chi tiết lớp')

@section('content')

<div class="container pb-5">
    <h2>Chi tiết lớp {{$courses->code}}</h2>
    <p>Tình trạng: <span class="text-danger">{{$courses->status}}</span></p>

    <div class="row">
        <div class="col-4">
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
            <div class="row  mt-2">
                <div class="col-1">
                    <i class="fa-solid fa-dollar-sign text-secondary fa-sm"></i>
                </div>
                <div class="col-11">
                    <p class="card-title text">{{$courses->fee / $courses->sessions_week }} ₫/buổi, {{$courses->sessions_week }} buổi/tuần</p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-1">
                    <i class="fa-regular fa-bookmark text-secondary fa-sm"></i>
                </div>
                <div class="col-11">
                    <p class="card-title text">Yêu cầu: {{$courses->request}}</p>
                </div>
            </div>
            <div class="row mt-2 mb-4">
                <div class="col-1">
                    <i class="fa-regular fa-clock fa-sm"></i>
                </div>
                <div class="col-11">
                    <p class="card-title text">Thời gian có thể học: {{$courses->time_learn}}. Những thời gian khác, cần trao đổi thêm với phụ huynh</p>
                </div>
            </div>

            <p><b>Đặc điểm học sinh: </b></p>
            <p>Giới tính: {{$courses->sex_student}}</p>
            <p>{{$courses->des_student}}</p>
            <hr>
            
            @if (!empty($courses->add_information))
                <p><b>Thông tin bổ sung: </b></p>
                <p>{{$courses->add_information}}</p>
                <hr>
            @endif
            
            
            
            <p>Mức thu nhập: <b>{{$courses->fee}}đ/tháng</b></p>
            <a href="{{ route('/dangkynhanlop'.'/'.$courses->id) }}" class="btn btn-success text-light"><b>Đăng ký nhận lớp</b></a>
            <p class="mt-3">Phí nhận lớp: <b>40%</b> | <span class="text-secondary">Chỉ nộp phí 1 lần, những tháng tiếp theo sẽ không mất phí</span></p>
        </div>
        <div class="col-7">
            <div id="map" style="height: 500px;"></div>
            <span class="text-secondary">Lưu ý: bản đồ thể hiện địa chỉ lớp gia sư một cách tương đối.</span>
        </div>
    </div>
</div>


<script>
    var map = L.map('map').setView([21.037964, 105.802456], 13); // Default coordinates for Hanoi

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        maxZoom: 18
    }).addTo(map);

    // Hàm để tìm tọa độ từ địa chỉ
    function getCoordinates(address, callback) {
        var url = `https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(address)}`;
        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (data && data.length > 0) {
                    var latitude = data[0].lat;
                    var longitude = data[0].lon;
                    callback(latitude, longitude);
                } else {
                    console.error('Không tìm thấy tọa độ cho địa chỉ này');
                }
            })
            .catch(error => console.error('Lỗi khi tìm tọa độ:', error));
    }

    // Đưa dữ liệu vào hàm và thêm marker vào bản đồ
    var address = {!! json_encode($courses->address . ', ' . $courses->district . ', Hà Nội') !!};
    getCoordinates(address, function(lat, lon) {
        map.setView([lat, lon], 15); // Zoom in to level 15 for more details
        L.marker([lat, lon]).addTo(map)
            .bindPopup(address)
            .openPopup();
    });
</script>





@endsection
