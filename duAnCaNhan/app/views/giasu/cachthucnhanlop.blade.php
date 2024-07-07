@extends('layout.giasu')

@section('title', 'Cách thức nhận lớp')

@section('content')

<div class="container">
    <div class="row pt-4">
        <div class="col-3">
            <h2>Cách thức nhận lớp</h2>
            <p>Vui lòng thực hiện theo gợi ý sau đây để nhận lớp</p>
        </div>
        <div class="col-9">
            <h4 class="text-blue-500">1. Sử dụng công cụ tìm kiếm</h4>
            <p class="mt-3">Bạn có thể sử dụng thanh công cụ tìm kiếm tại <a href="{{ route('/danhsachlopmoi') }}">Danh sách lớp mới</a> để tìm lớp phù hợp. Các thông tin bạn có thể tìm kiếm bao gồm: mã lớp, môn học, lớp học, cấp học, khu vực (quận/huyện), yêu cầu gia sư (sinh viên, giáo viên).</p>
            <img src="http://localhost/duAnCaNhan/public/img/danh-sach-lop-moi.png" alt="" class="mh-100 mw-100">
            <p class="mt-3">Bên cạnh đó, sử dụng bộ lọc cũng giúp cho việc tìm kiếm lớp phù hợp trở nên dễ dàng hơn.</p>

            <h4 class="text-blue-500 mt-5">2. Xem kỹ thông tin về lớp</h4>
            <p class="mt-3">
                Sau khi bạn đã tìm được lớp phù hợp, hãy nhấp vào nút <b>Xem chi tiết</b> để xem kỹ về thông tin lớp. Lưu ý: bản đồ thể hiện địa chỉ lớp gia sư một cách tương đối.
            </p>
            <p class="mt-3">
                Hãy lưu ý kỹ về các thông tin quan trọng như địa chỉ, đặc điểm học sinh (học viên), thời gian có thể học.
            </p>
            <img src="http://localhost/duAnCaNhan/public/img/chi-tiet-lop.png" alt="" class="mh-100 mw-100">
            <p class="mt-3">
                Hãy lưu ý kỹ về các thông tin quan trọng như địa chỉ, đặc điểm học sinh (học viên), thời gian có thể học.
            </p>
            <h4 class="text-blue-500 mt-5">3. Đăng ký nhận lớp</h4>
            <p class="mt-3">Sau khi đã thấy thông tin lớp phù hợp với bạn, hãy nhấp vào nút "Đăng ký nhận lớp" và làm theo hướng dẫn. Hoặc truy cập vào trang <a href="{{ route('/taonotenhanlop') }}"> Tạo note nhận lớp</a>.</p>
            <p class="mt-3">Các yêu cầu bắt buộc bao gồm bạn phải cập nhật thông tin đầy đủ, đồng ý với điều khoản nhận lớp, làm một bài test ngắn và sau đó tạo <b>Note nhận lớp</b>.</p>
            <img src="http://localhost/duAnCaNhan/public/img/dang-ky-nhan-lop.png" alt="" class="mh-100 mw-100">

            <p class="mt-3">
                Có 2 hình thức mà bạn có thể nhận lớp: Online và Offline. Tuy nhiên, để nhận lớp Online, bạn cần đạt được một số tiêu chuẩn của Insights Springs.
            </p>

            <h4 class="text-blue-500 mt-5">4. Chờ đợi phản hồi</h4>
            <p class="mt-3">Sau khi bạn tạo note nhận lớp, không có nghĩa là bạn sẽ được nhận lớp đó. Insights Springs sẽ lựa chọn gia sư phù hợp nhất và giao lớp.</p>
            <p class="mt-3">Sau vài ngày kể từ thời điểm tạo note nhận lớp, bạn sẽ nhận được thông báo của Insights Springs. Có thể bằng các phương thức gọi điện, nhắn tin hoặc email.</p>
            <p class="mt-3">Bạn cũng có thể theo dõi tình trạng đăng ký nhận lớp của bạn tại <a href="{{ route('/quanlynotenhanlop') }}">Quản lý note nhận lớp</a></p>
            <img src="http://localhost/duAnCaNhan/public/img/cho-phan-hoi.png" alt="" class="mh-100 mw-100">

            <p class="mt-3">Một số phản hồi sẽ lâu hơn bình thường, hãy kiên nhẫn chờ đợi sau khi bạn đã đăng ký nhận lớp.</p>
            <h4 class="text-blue-500 mt-5">5. Đừng thất vọng</h4>
            <p class="mt-3">Luôn có nhiều gia sư đăng ký cho 1 lớp. Do vậy nếu bạn không nhận được lớp, đừng thất vọng. Những gia sư đã có lịch sử nhận lớp tốt, thông tin phù hợp với lớp và đăng ký sớm hơn sẽ được ưu tiên trước.</p>
            <p class="mt-3">Và trên tất cả, vẫn đang còn những lớp khác. Hãy liên tục tìm kiếm lớp phù hợp với bạn tại trang <a href="{{ route('/danhsachlopmoi') }}">Danh sách lớp mới</a> của Insights Springs.</p>
            <img src="http://localhost/duAnCaNhan/public/img/trang-tong-quan.png" alt="" class="mh-100 mw-100">

            <p class="mt-3">Chúng tôi luôn có số lượng lớp đa dạng và mức học phí hấp dẫn, xứng đáng với kiến thức và kỹ năng giảng dạy của bạn.</p>



            <a href="{{ route('/danhsachlopmoi') }}" class="btn btn-primary">Xem danh sách lớp mới</a>




        </div>
    </div>
</div>

@endsection
