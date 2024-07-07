@extends('layout.giasu')

@section('title', 'Chính sách hoàn phí')

@section('content')

<div class="container mb-4">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h1><b>Chính sách hoàn phí</b></h1> <br>
            <p>Nếu Gia Sư <b>không</b> vi phạm một trong các <b>Điều 2, Điều 3, Điều 4</b> của <a href="{{ route('/hopdongmau') }}">hợp đồng</a>, Insights Springs sẽ đảm bảo quyền lợi của Gia Sư khi lớp gặp sự cố. Cụ thể:
            </p>
            <p>Insights Springs sẽ xác minh thông tin với phụ huynh/học viên về sự cố của lớp, nếu thông tin là <b>đúng sự thật</b>, đồng thời Gia Sư <b>không</b> có các dấu hiệu khai báo gian lận, Insights Springs sẽ:
            </p>
            <h3 class="text-blue-500">Tính lại phí nhận lớp</h3>
            <p><i class="fa-solid fa-xmark fa-sm"></i> Trường hợp phụ huynh/học viên hủy lớp (số buổi đã dạy nhỏ hơn hoặc bằng 2): Phí nhận lớp = 0 ₫. Gia Sư có thể yêu cầu Insights Springs giữ lại tiền đặt cọc để chuyển sang lớp mới, nếu được Insights Springs đồng ý.</p>
            <p><i class="fa-solid fa-xmark fa-sm"></i> Trường hợp phụ huynh/học viên kết thúc lớp học sớm (số buổi đã dạy nhỏ hơn số buổi học/tuần × 4): Phí nhận lớp = học phí/buổi × tổng số buổi đã dạy thực tế × mức % phí nhận lớp ban đầu.</p>
            <p><i class="fa-solid fa-xmark fa-sm"></i> Các trường hợp lớp bị giảm học phí, giảm số buổi học/tuần (điều kiện: thời gian giảm số buổi học/tuần phải dài ít nhất 4 tuần liên tiếp), sẽ dựa vào số liệu thực tế: Phí nhận lớp = học phí/buổi × số buổi học/tuần × 4 × mức % phí nhận lớp ban đầu.</p>
            <h3 class="text-blue-500">Hoàn lại tiền cọc</h3>
            <p>Số tiền còn dư sau khi tính lại phí nhận lớp, sẽ được Insights Springs hoàn lại cho Gia Sư. Phương thức hoàn phí sẽ do Insights Springs quyết định.</p>
            <p>Các trường hợp Gia Sư muốn thanh toán và lấy lại giấy tờ, Gia Sư bắt buộc phải đến trung tâm. Do việc chuyển gửi giấy tờ mang nhiều rủi ro, Insights Springs không chuyển gửi giấy tờ của Gia Sư qua bưu điện.</p>
            <h3 class="text-blue-500">Đổi lớp mới</h3>
            <p>Khi gia sư có yêu cầu Insights Springs giữ lại tiền đặt cọc để chuyển sang lớp mới, Insights Springs sẽ đánh giá xác suất làm hỏng lớp tiếp theo của gia sư. Nếu xác suất làm hỏng lớp tiếp theo là thấp, Gia Sư sẽ được đổi lớp mới.</p>
            <p>Số tiền chênh lệch giữa 2 lớp sẽ được Gia Sư thanh toán thêm (nếu còn thiếu) hoặc Insights Springs hoàn lại (nếu gia sư có số dư).                </p>
            <h4><b>* Lưu ý:</b></h4>
            <p>Các trường hợp thay đổi số buổi học/tuần mà Phụ huynh/học viên dự kiến chỉ thay đổi trong thời gian ngắn (nhỏ hơn 4 tuần) sẽ không được áp dụng tính lại phí nhận lớp;</p>
            <p>Gia sư cần nhắn tin đến Fanpage Gia Sư Insights Springs để thông báo cho trung tâm, với thời gian muộn nhất 24h sau khi phát sinh các vấn đề huỷ lớp, thay đổi số buổi học/tuần, thay đổi học phí;</p>
            <p>Tất cả các thông tin liên quan đến việc tính lại phí và hoàn phí sẽ được thể hiện chi tiết trong hợp đồng gia sư. <a href="{{ route('/hopdongmau') }}">Xem hợp đồng mẫu</a></p>

            <a href="{{ route('/hopdongmau') }}" class="btn btn-success">Xem hợp đồng mẫu</a> <a href="{{ route('/danhsachlopmoi') }}" class="btn btn-primary">Xem danh sách lớp mới</a>

            
        </div>
        <div class="col-2"></div>
    </div>
</div>

@endsection
