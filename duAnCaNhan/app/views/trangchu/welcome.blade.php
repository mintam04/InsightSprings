@extends('layout.trangchu')

@section('title', 'Trang chủ')

@section('content')

<div class="container">
    <div class="row" style="height: 350px;">
        <div class="col-6">
            <div class="text-center" style="font-size: 30px;">
                <b>Trung tâm gia sư Insight Springs, xin chào!</b> <br>
            </div>
            <p>
                Tại Insight Springs, chúng tôi tin rằng mỗi học sinh mang trong mình một tiềm năng vô hạn để phát
                triển
                và thành công. Chính vì vậy, chúng tôi cam kết cung cấp một môi trường học tập thú vị, khuyến khích
                sự
                tò mò và nuôi dưỡng sự sáng tạo.
            </p>

            <p>
                Với đội ngũ gia sư chuyên nghiệp và đam mê, Insight Springs không chỉ là nơi cung cấp kiến thức mà
                còn
                là nguồn cảm hứng để học sinh khám phá và phát triển bản thân. Chúng tôi không chỉ tập trung vào
                việc
                truyền đạt kiến thức một cách hiệu quả mà còn xây dựng sự tự tin và kỹ năng tự học cho học sinh.

            </p>
            <p>
                Dù bạn cần sự hỗ trợ trong việc nắm vững kiến thức cơ bản hoặc muốn thách thức bản thân với những
                bài
                tập phức tạp, Insight Springs luôn sẵn lòng đồng hành và hỗ trợ bạn trên mọi bước đường của hành
                trình
                học tập.
            </p>

            <div class="text-center">
                <a class="text-dark btn btn-warning" href="#"><b>Đăng ký thuê gia sư ngay</b></a>
            </div>

        </div>
        <div class="col-6 overflow-hidden d-flex justify-content-center align-items-center m-auto"
            style="height: 350px;">
            <img src="http://localhost/duAnCaNhan/public/img/banner5.png" class="mh-100 mw-100">
        </div>
    </div>
</div>

<div class="container-fluid bg-light mt-5">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-2 overflow-hidden d-flex justify-content-center align-items-center m-auto"
            style="height: 350px;">
            <img src="http://localhost/duAnCaNhan/public/img/1.png" class="mh-100 mw-100">
        </div>
        <div class="col-1"></div>
        <div class="col-6 mt-5">
            <b style="font-size: 35px;">Bạn là giáo viên, sinh viên?</b><br><br>
            <p style="font-size: 19px;">Gia nhập vào đội ngũ gia sư của Insight Springs, nhận lớp và có thêm thu
                nhập từ những kiến thức, kỹ năng giảng dạy của bạn.</p>
            <nav class="navbar navbar-expand-sm">
                <div class="container">
                    <ul class="navbar-nav">
                        <li class="nav-item me-2">
                            <a class="nav-link text-primary" href="#"><i class="fa-solid fa-angle-right"></i> Đăng
                                ký làm gia sư</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="nav-link text-primary" href="#"><i class="fa-solid fa-angle-right"></i> Đăng
                                nhập vào tài khoản</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="nav-link text-primary" href="#"><i class="fa-solid fa-angle-right"></i> Xem
                                danh sách lớp mới</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <a href="" class="text-light btn btn-success"><b>Đến trang dành cho gia sư</b></a>
        </div>
        <div class="col-2"></div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-6 mt-5">
            <b style="font-size: 35px;">Bạn cần thuê gia sư?</b><br><br>
            <h6>Trải nghiệm dịch vụ chất lượng và chuyên nghiệp!</h6>
            <p>Thật tốn thời gian khi gặp phải gia sư không phù hợp. Insight Springs luôn làm việc chuyên nghiệp và trách
                nhiệm, bắt đầu từ việc tuyển chọn đến đào tạo gia sư. Đảm bảo gia sư luôn đạt tiêu chuẩn về kiến
                thức và kỹ năng giảng dạy.</p>
            <a href="" class="text-light btn btn-primary"><i class="fa-solid fa-arrow-right"></i><b> Đăng ký thuê
                    gia sư ngay</b></a>
        </div>
        <div class="col-4 overflow-hidden d-flex justify-content-center align-items-center m-auto"style="height: 350px; width: 350px;">
            <img src="http://localhost/duAnCaNhan/public/img/2.png" class="mh-100 mw-100">
        </div>
        <div class="col-1"></div>
    </div>
</div>
<div class="container-fluid bg-light pb-5">
    <div class="text-center pt-5">
        <b style="font-size: 35px; ">Những lợi ích mà bạn có được:</b>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-4">
                <div class="row">
                    <div class="col-1">
                        <i class="fa-solid fa-check text-success fa-lg"></i>
                    </div>
                    <div class="col-11">
                        <p>Không phải mất công đi lại, gia sư đến dạy trực tiếp ngay tại nhà</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <i class="fa-solid fa-check text-success fa-lg"></i>
                    </div>
                    <div class="col-11">
                        <p>Biết được tình trạng học tập của con bất cứ khi nào bạn muốn</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-1">
                        <i class="fa-solid fa-check text-success fa-lg"></i>
                    </div>
                    <div class="col-11">
                        <p>Con được học 1-1, tạo nên chất lượng giảng dạy tốt nhất</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <i class="fa-solid fa-check text-success fa-lg"></i>
                    </div>
                    <div class="col-11">
                        <p>Không còn lo lắng mỗi khi con đối mặt với thi cử, bởi gia sư đã giúp con đã nắm vững kiến thức</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-1">
                        <i class="fa-solid fa-check text-success fa-lg"></i>
                    </div>
                    <div class="col-11">
                        <p>Dễ dàng quản lý giờ giấc học tập của con, không sợ con ham chơi, trốn học</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <i class="fa-solid fa-check text-success fa-lg"></i>
                    </div>
                    <div class="col-11">
                        <p>Việc học tập của con được đảm bảo, trong khi bạn không phải tốn quá nhiều công sức và thời gian                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="" class="text-light btn btn-primary"><i class="fa-solid fa-arrow-right"></i><b> Đăng ký thuê
            gia sư ngay</b></a>
    </div>
</div>

<div class="container-fluid pb-5">
    <div class="text-center pt-5">
        <b style="font-size: 35px; ">Tại sao chọn trung tâm gia sư Insight Springs?</b>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-4">
                <h3><i class="fa-solid fa-bullhorn text-danger fa-2xl"></i></h3><br>
                <b style="font-size: 18px;">Dạy hiệu quả</b><br>
                <p>Con chỉ có thể học tốt nếu yêu thích việc học. Gia sư tại Insight Springs luôn biết cách tạo động lực cho con, bằng các phương pháp giảng dạy thú vị, dễ hiểu và hiệu quả.</p>
            </div>
            <div class="col-4">
                <h3><i class="fa-solid fa-book-open text-danger fa-2xl"></i></h3><br>
                <b style="font-size: 18px;">Tiến bộ nhanh</b><br>
                <p>Với gia sư giỏi tại Insight Springs, con bạn sẽ nhanh chóng học tập tiến bộ, có kết quả khác biệt chỉ sau 10 buổi học: Con chăm ngoan, học tốt hơn, điểm số cao hơn.</p>
            </div>
            <div class="col-4">
                <h3><i class="fa-solid fa-hand-holding-hand text-danger fa-2xl"></i></h3><br>
                <b style="font-size: 18px;">Học thử 2 buổi</b><br>
                <p>Sau 2 buổi học thử đầu tiên, nếu không hài lòng về gia sư, bạn không cần phải thanh toán học phí. Tất nhiên, Insight Springs luôn có những gia sư khiến bạn hài lòng nhất.</p>
            </div>
        </div>
    </div>
    <div class="text-center mt-5">
        <a href="" class="text-light btn btn-primary"><i class="fa-solid fa-arrow-right"></i><b> Đăng ký thuê gia sư ngay</b></a>
    </div>
</div>
<div class="container">
    <hr>
</div>
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-2 overflow-hidden d-flex justify-content-center align-items-center m-auto"
            style="height: 350px;">
            <img src="http://localhost/duAnCaNhan/public/img/3.png" class="mh-100 mw-100">
        </div>
        <div class="col-1"></div>
        <div class="col-6 mt-5">
            <b style="font-size: 35px;">Tạo dựng tương lai cho con</b><br><br>
            <p >Cùng trung tâm gia sư Insight Springs giúp con học giỏi và mang đến cho con một tương lai tốt đẹp. Dù con bạn đang ở mức học lực nào, chúng tôi đều có thể giúp bạn. Hãy liên hệ với bộ phận Quản Lý Đào Tạo để được tư vấn tốt nhất.</p>
            <a href="" class="text-light btn btn-primary"><i class="fa-solid fa-arrow-right"></i><b> Đăng ký thuê gia sư ngay</b></a>
        </div>
        <div class="col-2"></div>
    </div>
</div>
@endsection
