@extends('layout.quanlytaikhoan')

@section('title', 'Xử lý tình huống')

@section('content')

    <div class="">
        <form action="{{ route('/postxulytinhhuong') }}" method="POST">
            <h3>Đào tạo về xử lý tình huống</h3>

            <h4 class="mt-5">1. Gọi điện đến phụ huynh/học viên</h4>
            <p class="mt-3">Khi bạn nhận lớp tại GrowGreen, trong vòng muộn nhất 2h kể từ thời điểm làm hợp đồng gia sư,
                bạn sẽ phải chủ động gọi điện đến phụ huynh/học viên để giới thiệu về bản thân và sắp xếp lịch học thử.</p>
            <a href="{{ route('/chinhsachhocthu') }}" class="mt-3">Xem chính sách học thử</a>

            <p class="mt-3">Ví dụ mẫu về cuộc gọi:</p>
            <div class="row mt-3">
                <div class="col-8 bg-light rounded-2">
                    <p class="mt-3">- {Cháu} chào {cô} ạ. Cho {cháu} hỏi có phải là {cô A} phải không ạ?</p>
                    <p>- ... phản hồi ...</p>
                    <p>- {Cháu} là Nguyễn Minh Tâm, sinh viên trường Cao đẳng FPT Polytechnic. {Cháu} được Trung tâm gia sư
                        GrowGreen giới thiệu đến để dạy môn {X} cho {bạn lớp Y} nhà {cô} ạ.</p>
                    <p>- ... phản hồi ...</p>
                    <p>- Dạ vâng ạ. Vào hôm nào thì {cháu} có thể qua nhà {cô} để bắt đầu dạy được ạ?</p>

                </div>
            </div>
            <p class="mt-3">Trong trường hợp mà phụ huynh/học viên muốn biết thêm thông tin về bạn, ví dụ như những thành
                tích và kinh nghiệm, bạn chỉ cần trả lời một cách thành thật. Nếu bạn chưa từng giảng dạy gia sư qua trung
                tâm, nhưng đã dạy kèm cho người thân thì đó vẫn được gọi là kinh nghiệm gia sư của bạn.</p>
            <p class="mt-3">Bạn nên giữ cho cách nói chuyện thật tự nhiên, thể hiện được sự nhiệt tình và mong muốn giảng
                dạy của bạn. Trong quá trình liên hệ với phụ huynh/học viên, nếu có bất kỳ sự cố nào, hãy nhắn tin ngay lập
                tức đến Fanpage Gia Sư GrowGreen để được hỗ trợ.</p>

            <h5 class="text-blue-500 mt-5">Trường hợp phụ huynh/học viên không nghe máy:</h5>
            <p class="mt-3">Bạn chỉ nên gọi 1 cuộc duy nhất, nếu phụ huynh/học viên không nghe máy, bạn cần để lại tin
                nhắn cho phụ huynh/học viên. Bạn không nên gọi nhiều cuộc khi phụ huynh/học viên không nghe máy, bởi có thể
                tại thời điểm đó, phụ huynh/học viên có thể đang bận công việc.</p>
            <b class="mt-3">Ví dụ mẫu về tin nhắn:</b>
            <div class="row mt-3">
                <div class="col-8 bg-light rounded-2">
                    <p class="mt-3">{Cháu} chào {cô} ạ. {Cháu} là gia sư Nguyễn Minh Tâm, được Trung tâm gia sư GrowGreen
                        giới thiệu đến để dạy môn {X} cho {bạn lớp Y} nhà {cô}. Vào hôm nào thì {cháu} có thể qua nhà {cô}
                        để bắt đầu dạy được ạ?</p>


                </div>
            </div>

            <p class="mt-3">Nếu bạn đã nhắn tin cho phụ huynh/học viên mà không nhận được tin nhắn phản hồi. Hãy gọi thêm
                1 cuộc gọi nữa vào ngày kế tiếp. Nếu phụ huynh/học viên vẫn không nghe máy, hãy nhắn tin đến Fanpage Gia Sư
                GrowGreen để được hỗ trợ.</p>
            <h4 class="mt-5">2. Đến gặp phụ huynh/học viên</h4>
            <p class="mt-3">Bạn cần đến đúng giờ, tốt nhất là nên đến sớm trước 30 phút nếu là buổi đầu tiên, mang theo
                chứng minh thư và thẻ sinh viên (nếu là sinh viên). Phong cách ăn mặc của bạn phải gọn gàng, lịch sự. Khi
                gặp phụ huynh, bạn cần chào hỏi lễ phép, lắng nghe những ý kiến của phụ huynh.</p>
            <p class="mt-3">Điều quan trọng, bạn bắt buộc phải mang theo tài liệu để giảng dạy. Tài liệu này phải là bản
                cứng (bằng giấy, có thể in hoặc viết tay), bao gồm 1 bài test nhanh để kiểm tra trình độ của học viên và 1
                bài giáo án mà bạn dự định sẽ dạy trong buổi hôm đó.</p>
            <p class="mt-3">Bạn cần lưu ý rằng các phụ huynh không thích người khác nhận xét quá tiêu cực về con cái. Do
                vậy, nếu trao đổi với phụ huynh về học lực của học sinh, bạn nên sử dụng câu từ nhẹ nhàng, tinh tế.</p>
            <h4 class="mt-5">3. Những buổi dạy tiếp theo</h4>
            <p class="mt-3">Bạn cần đảm bảo luôn đi dạy đúng giờ (nên đến sớm trước 15 phút), duy trì lịch dạy đều đặn và
                hạn chế sự gián đoạn. Nếu vì một lý do bất khả kháng, hãy gọi điện (không nên nhắn tin) báo trước với phụ
                huynh/học viên ít nhất 3 giờ, đồng thời giải thích với phụ huynh/học viên về nguyên nhân nghỉ, đưa ra lời
                xin lỗi vì đã gián đoạn lịch dạy.</p>
            <p class="mt-3">Cho dù bạn đã thân quen với phụ huynh/học viên, bạn vẫn cần giữ phong cách giảng dạy nhiệt
                tình, nghiêm túc và chuyên nghiệp. Luôn chuẩn bị giáo án trước mỗi buổi dạy, và giáo án phải là bản cứng
                (bằng giấy, có thể in hoặc viết tay).</p>
            <p class="mt-3">Tuyệt đối không sử dụng điện thoại trong quá trình dạy, hãy để chế độ im lặng. Kể cả khi bạn
                sử dụng điện thoại để kiểm tra kiến thức, có khả năng cao phụ huynh sẽ hiểu nhầm bạn sử dụng điện thoại cho
                mục đích riêng tư, và bạn sẽ rất khó có cơ hội để giải thích.</p>

            <hr class="mt-5">
            <div class="row">
                <div class="col-6"></div>
                @if ($xuLyTinhHuong != 1)
                    <div class="col-6">
                        Xác nhận với GrowGreen rằng bạn đã hoàn thành bài đào tạo về cách xử lý tình huống của GrowGreen
                    </div>
                    <div class="text-end">
                        <button class="btn btn-light" name="gui">Xác nhận</button>
                    </div>
                @else
                    <div class="col-6 text-end mt-3">
                        Bạn đã hoàn thành bài đào tạo này
                    </div>
                    <div class="text-end mt-3">
                        <a href="{{ route('/quanlytaikhoan') }}" class="btn btn-primary">Quay về tài khoản của tôi</a>
                    </div>
                @endif



            </div>

        </form>
    </div>


@endsection
