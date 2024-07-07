@extends('layout.giasu')

@section('title', 'Hợp đồng mẫu')

@section('content')

<div class="container pt-5 pb-5">
    <div class="row ">
        <div class="col-2"></div>
        <div class="col-8 shadow">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <h1 class="mt-5"><b>Hợp đồng mẫu</b></h1> <br>
                    <p>Đây là phiên bản HTML của hợp đồng mẫu, giúp bạn có thể xem các điều khoản trên điện thoại di
                        động
                        một cách dễ dàng hơn. </p>
                    <h5 class="text-success mt-3"><b>Định nghĩa các bên:</b></h5>
                    <p class="mt-3"><b>Bên A</b> là Trung Tâm Gia Sư Insights Springs, có tư cách pháp nhân là Công Ty TNHH
                        Insights Springs
                        Việt Nam.
                    </p>
                    <p><b>Bên B</b> là Gia Sư: người chịu trách nhiệm giảng dạy tại nhà phụ huynh/học viên.</p>
                    <h5 class="text-success mt-3"><b>Các điều khoản:</b></h5>
                    <h5 class="text-blue-500 mt-3">Điều 1: Nội dung hợp đồng</h5>
                    <p class="mt-3">Bên A giới thiệu bên B đến phụ huynh/học viên để giảng dạy, với các thông tin
                        dưới đây:</p>
                    <p>Phụ huynh/học viên, Số điện thoại, Địa chỉ, Môn học, Lớp học, Số buổi học/tuần, Thời lượng:
                        2h/buổi,
                        Học phí/buổi.</p>
                    <p>Thời gian Bên B (gia sư) có thể dạy.</p>
                    <h5 class="text-blue-500 mt-3">Điều 2: Nghĩa vụ của Bên B </h5>
                    <div class="row mt-3">
                        <div class="col-1">
                            1)
                        </div>
                        <div class="col-11">
                            Trong vòng <b>tối đa 2h</b> kể từ thời điểm nhận hợp đồng, Bên B phải liên hệ với phụ huynh/học
                            viên.
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-1">
                            2)
                        </div>
                        <div class="col-11">
                            Khi đến gặp tại buổi đầu tiên, Bên B phải <b>gửi</b> cho phụ huynh/học viên <b>giấy giới thiệu gia sư</b>.
                            Trong trường hợp nhận lớp online, Bên B phải in giấy giới thiệu gia sư được đính kèm
                            trong
                            email.
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-1">
                            3)
                        </div>
                        <div class="col-11">
                            Khi đến gặp tại buổi đầu tiên, Bên B phải xuất trình cho phụ huynh/học viên xem bản gốc
                            (hoặc
                            bản sao, ảnh chụp) các loại giấy tờ: Thẻ sinh viên (nếu là sinh viên), Thẻ giáo viên
                            (nếu là
                            giáo viên), Thẻ căn cước công dân.
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-1">
                            4)
                        </div>
                        <div class="col-11">
                            Bên B phải chuẩn bị giáo trình, giáo án trước khi giảng dạy. Đồng thời đảm bảo được lịch
                            học và thời gian giảng dạy cho phụ huynh/học viên. (Nếu vì lý do bất khả kháng, Bên B
                            phải báo trước cho phụ huynh/học viên <b>ít nhất 2 giờ</b> ). </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-1">
                            5)
                        </div>
                        <div class="col-11">
                            Bên B phải thông báo cho Bên A trong thời gian <b>tối đa 24h</b>, kể từ thời điểm phát sinh các
                            sự cố: không liên hệ được với phụ huynh/học viên; phụ huynh/học viên không sắp xếp được
                            lịch học; phụ huynh/học viên thông báo giảm số buổi học/tuần, giảm học phí, tạm dừng
                            lớp, hủy lớp; các sự cố nghiêm trọng khác. </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-1">
                            6)
                        </div>
                        <div class="col-11">
                            Bên B lưu số điện thoại của Bên A <b>(098-326-4473)</b> để Bên A tiện liên hệ nếu lớp xảy ra sự
                            cố. Trường hợp Bên B không nghe điện thoại, Bên B phải gọi lại cho bên A <b>muộn nhất 4h</b> kể
                            từ khi có cuộc gọi nhỡ. </div>
                    </div>
                    <div class="row  mt-3">
                        <div class="col-1">
                            7)
                        </div>
                        <div class="col-11">
                            Bên B không được chuyển giao lớp học cho người khác. </div>
                    </div>

                    <h5 class="text-blue-500 mt-3">Điều 3: Chính sách học thử của học sinh/học viên</h5>
                    <div class="row mt-3">
                        <div class="col-1">
                            1)
                        </div>
                        <div class="col-11">
                            <p>Nội dung chính sách:</p>
                            <p>Học sinh/học viên được quyền học thử với gia sư qua 2 buổi học đầu tiên. Sau 2 buổi
                                này:</p>
                            <div class="row">
                                <div class="col-1">-</div>
                                <div class="col-11">Nếu <b>không</b> đồng ý nhận gia sư, phụ huynh/học viên <b>không</b> phải
                                    thanh toán học phí;</div>
                            </div>
                            <div class="row">
                                <div class="col-1">-</div>
                                <div class="col-11">Nếu đồng ý và tiếp tục học, phụ huynh/học viên <b>sẽ thanh toán</b> học
                                    phí của cả 2 buổi này cho gia sư.</div>
                            </div>

                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-1">
                            2)
                        </div>
                        <div class="col-11">
                            <p>Bên B (gia sư) phải có nghĩa vụ truyền đạt rõ ràng chính sách này đến phụ huynh/học
                                viên. Chính sách này có trong giấy giới thiệu gia sư, Bên B phải đưa cho phụ
                                huynh/học viên giữ trong buổi gặp mặt đầu tiên. Nếu Bên B <b>nhận lớp online</b>, Bên B
                                <b>phải tự in</b> giấy giới thiệu gia sư (đính kèm trong email).</p>
                        </div>
                    </div>
                    <h5 class="text-blue-500 mt-3">Điều 4: Phạt hợp đồng</h5>
                    <p class="mt-3">Bên B sẽ bị phạt 100% giá trị hợp đồng, nếu xảy ra 1 trong các trường hợp sau:
                    </p>
                    <div class="row mt-3">
                        <div class="col-1">
                            1)
                        </div>
                        <div class="col-11">
                            Bên B không thực hiện đầy đủ nghĩa vụ của mình thuộc <b>Điều 2</b> hoặc <b>Điều 3</b>;
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-1">
                            2)
                        </div>
                        <div class="col-11">
                            Bên B tuyên bố mình không thể giảng dạy tốt, khiến lớp bị hủy;
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-1">
                            3)
                        </div>
                        <div class="col-11">
                            Bên B không sắp xếp được lịch dạy, khiến lớp bị hủy hoặc bị giảm số buổi/tuần;
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-1">
                            4)
                        </div>
                        <div class="col-11">
                            Bên B có thái độ, cách cư xử không đúng chuẩn mực, khiến lớp bị hủy;
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-1">
                            5)
                        </div>
                        <div class="col-11">
                            Lớp bị hủy hoặc bị giảm số buổi/tuần do những lý do cá nhân xuất phát từ Bên B (Bên B
                            viện cớ nhà xa, không tiện xe bus, di chuyển đến địa điểm khác, Bên B khai báo thông tin
                            không đúng sự thật, ...);
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-1">
                            6)
                        </div>
                        <div class="col-11">
                            Bên B tự ý bỏ lớp (kể cả các trường hợp lớp bị giảm số buổi học/tuần, lớp gặp sự cố) mà
                            không có sự cho phép của Bên A.
                        </div>
                    </div>
                    <p class="mt-3">Lưu ý: Trong trường hợp Bên B nợ phí, nếu Bên B bị phạt hợp đồng, Bên B vẫn phải
                        thanh toán đầy đủ và đúng hạn số phí nhận lớp cho Bên A theo <b>Điều 6</b> của hợp đồng. </p>

                    <h5 class="text-blue-500 mt-3">Điều 5: Nghĩa vụ của bên A</h5>
                    <p class="mt-3">
                        Nếu Bên B <b>không</b> vi phạm một trong các <b>Điều 2, Điều 3, Điều 4</b> của hợp đồng, Bên A sẽ đảm bảo
                        quyền lợi của Bên B khi lớp gặp sự cố. Cụ thể:
                    </p>
                    <p class="mt-3">
                        Bên A sẽ xác minh thông tin với phụ huynh/học viên về sự cố của lớp, nếu thông tin là <b>đúng
                        sự thật</b>, đồng thời Bên B <b>không</b> có các dấu hiệu khai báo gian lận, Bên A sẽ:
                    </p>
                    <div class="row mt-3">
                        <div class="col-1">
                            1)
                        </div>
                        <div class="col-11">
                            Tính lại phí nhận lớp
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-1"></div>
                        <div class="col-1">a. </div>
                        <div class="col-10">
                            Trường hợp phụ huynh/học viên hủy lớp (số buổi đã dạy nhỏ hơn hoặc bằng 2): Phí nhận lớp
                            = 0 ₫.
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-1"></div>
                        <div class="col-1">b. </div>
                        <div class="col-10">
                            Trường hợp phụ huynh/học viên kết thúc lớp học sớm (số buổi đã dạy nhỏ hơn số buổi
                            học/tuần × 4): Phí nhận lớp = học phí/buổi × tổng số buổi đã dạy thực tế × mức % phí
                            nhận lớp ban đầu.
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-1"></div>
                        <div class="col-1">c. </div>
                        <div class="col-10">
                            Các trường hợp lớp bị giảm học phí, giảm số buổi học/tuần (điều kiện: thời gian giảm số buổi học/tuần phải <b>kéo dài ít nhất 4 tuần liên tiếp</b> ), sẽ dựa vào số liệu thực tế: Phí nhận lớp = học phí/buổi × số buổi học/tuần × 4 × mức % phí nhận lớp ban đầu.
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-1">
                            2)
                        </div>
                        <div class="col-10">
                            Số tiền còn dư sau khi tính lại phí nhận lớp, sẽ được Bên A hoàn lại cho Bên B.
                        </div>
                    </div>


                    <h5 class="text-blue-500 mt-3">Điều 6: Phí nhận lớp</h5>
                    <p class="mt-3">
                        Tất cả bao gồm: phí quản lý gia sư, xác minh thông tin, làm hợp đồng, tư vấn phụ huynh/học viên, quản lý thông tin lớp học, xử lý các sự cố phát sinh.
                    </p>
                    <p class="mt-3">
                        Bên B thanh toán cho Bên A số tiền: ......... Số tiền đã đặt cọc trước: ......... Còn thiếu: ......... Hẹn ngày ......... sẽ thanh toán đầy đủ.
                    </p>
                    <p class="mt-3">
                        Sau 30 ngày kể từ thời điểm làm hợp đồng, số tiền đặt cọc sẽ được chuyển thành phí nhận lớp.
                    </p>

                    <h5 class="text-blue-500 mt-3">Điều 7: Thời gian có hiệu lực của hợp đồng</h5>
                    <p class="mt-3 pb-5">Hợp đồng có hiệu lực đến hết ngày ......... (30 ngày kể từ ngày làm hợp đồng). Tuy nhiên khi hết thời hạn này, nếu Bên B đang còn nợ phí nhận lớp, Bên B vẫn phải thanh toán đầy đủ cho Bên A.</p>

                    <p class="text-center text-secondary pb-5">--Hết--</p>

                    <div class="text-center mb-5">
                        <a href="{{ route('/tongquan') }}" class="text-center btn btn-primary">Quay về trang tổng quan</a>
                    </div>

                </div><!-- Kết thúc -->

                <div class="col-1"></div>
            </div>




        </div>
        <div class="col-2"></div>
    </div>
</div>

@endsection
