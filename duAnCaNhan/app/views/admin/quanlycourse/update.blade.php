@extends('layout.admin')

@section('title', 'Cập nhật lớp')

@section('content')
    
<div class="content-body">
    <div class="container-fluid">	
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cập nhật lớp</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{route('/adminupupdatecourse'.'/'.$course->id)}}" method="post" enctype="multipart/form-data">
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Mã lớp</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="code" value="{{$course->code}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Môn học</label>
                                    <div class="col-sm-10">
                                        <select name="subject" id="subject" class="form-control">
                                            <option value="{{$course->subject}}" selected>{{$course->subject}}</option>
                                            <option value="">Chọn môn học</option>
                                            <option value="Toán học">Toán học</option>
                                            <option value="Vật lý">Vật lý</option>
                                            <option value="Hóa học">Hóa học</option>
                                            <option value="Sinh học">Sinh học</option>
                                            <option value="Khoa học tự nhiên">Khoa học tự nhiên</option>
                                            <option value="Ngữ văn">Ngữ văn</option>
                                            <option value="Tiếng anh">Tiếng anh</option>
                                        </select>
                                    
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Lớp</label>
                                    <div class="col-sm-10">
                                        <select name="class" id="class" class="form-control">
                                            <option value="{{$course->class}}" selected>{{$course->class}}</option>
                                            <option value="">Chọn lớp</option>
                                            <option value="1">Lớp 1</option>
                                            <option value="2">Lớp 2</option>
                                            <option value="3">Lớp 3</option>
                                            <option value="4">Lớp 4</option>
                                            <option value="5">Lớp 5</option>
                                            <option value="6">Lớp 6</option>
                                            <option value="7">Lớp 7</option>
                                            <option value="8">Lớp 8</option>
                                            <option value="9">Lớp 9</option>
                                            <option value="10">Lớp 10</option>
                                            <option value="11">Lớp 11</option>
                                            <option value="12">Lớp 12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Địa chỉ</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="address" value="{{$course->address}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Khu vực</label>
                                    <div class="col-sm-10">
                                        <select name="district" id="district" class="form-control">
                                            <option value="{{$course->district}}" selected>{{$course->district}}</option>
                                            <option value="">Chọn khu vực</option>
                                            <option value="Quận Ba Đình">Quận Ba Đình</option>
                                            <option value="Quận Bắc Từ Liêm">Quận Bắc Từ Liêm</option>
                                            <option value="Quận Cầu Giấy">Quận Cầu Giấy</option>
                                            <option value="Quận Đống Đa">Quận Đống Đa</option>
                                            <option value="Quận Hà Đông">Quận Hà Đông</option>
                                            <option value="Quận Hai Bà Trưng">Quận Hai Bà Trưng</option>
                                            <option value="Quận Hoàn Kiếm">Quận Hoàn Kiếm</option>
                                            <option value="Quận Hoàng Mai">Quận Hoàng Mai</option>
                                            <option value="Quận Long Biên">Quận Long Biên</option>
                                            <option value="Quận Nam Từ Liêm">Quận Nam Từ Liêm</option>
                                            <option value="Quận Tây Hồ">Quận Tây Hồ</option>
                                            <option value="Quận Thanh Xuân">Quận Thanh Xuân</option>
                                            <option value="Huyện Đan Phượng">Huyện Đan Phượng</option>
                                            <option value="Huyện Đông Anh">Huyện Đông Anh</option>
                                            <option value="Huyện Gia Lâm">Huyện Gia Lâm</option>
                                            <option value="Huyện Hoài Đức">Huyện Hoài Đức</option>
                                            <option value="Huyện Mê Linh">Huyện Mê Linh</option>
                                            <option value="Huyện Mỹ Đức">Huyện Mỹ Đức</option>
                                            <option value="Huyện Phú Xuyên">Huyện Phú Xuyên</option>
                                            <option value="Huyện Phúc Thọ">Huyện Phúc Thọ</option>
                                            <option value="Huyện Quốc Oai">Huyện Quốc Oai</option>
                                            <option value="Huyện Sóc Sơn">Huyện Sóc Sơn</option>
                                            <option value="Huyện Thạch Thất">Huyện Thạch Thất</option>
                                            <option value="Huyện Thanh Oai">Huyện Thanh Oai</option>
                                            <option value="Huyện Thanh Trì">Huyện Thanh Trì</option>
                                            <option value="Huyện Thường Tín">Huyện Thường Tín</option>
                                            <option value="Huyện Ứng Hòa">Huyện Ứng Hòa</option>
                                            <option value="Huyện Ba Vì">Huyện Ba Vì</option>
                                        </select>
                                        
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Giới tính</label>
                                    <div class="col-sm-10">
                                        <select name="sex_student" id="" class="form-control">
                                            <option value="{{$course->sex_student}}" selected>{{$course->sex_student}}</option>
                                            <option value="">Chọn giới tính</option>
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                        </select>
                                    
                                    </div>
                                </div> 
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Mô tả học sinh</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="des_student" value="{{$course->des_student}}"  >
                                    
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Thông tin thêm</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="add_information" value="{{$course->add_information}}" >
                                    
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Học phí</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="fee" value="{{$course->fee}}" >
                                    
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Số buổi/tuần</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="sessions_week" value="{{$course->sessions_week}}" >
                                    
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Thời gian học</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="time_learn" value="{{$course->time_learn}}" >
                                    
                                    </div>
                                </div>
                        
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Yêu cầu</label>
                                    <div class="col-sm-10">
                                        <select name="request" id="" class="form-control">
                                            <option value="{{$course->request}}" selected>{{$course->request}}</option>
                                            <option value="">Chọn yêu cầu</option>
                                            <option value="Giáo viên">Giáo viên</option>
                                            <option value="Sinh viên">Sinh viên</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Phụ huynh</label>
                                    <div class="col-sm-10">
                                        <select name="parents_id" id="" class="form-control">
                                            <option value="{{$parents->id}}">{{$parents->id}} - {{$parents->name}}</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                {{-- <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Status</label>
                                    <div class="col-sm-10">
                                        <select name="status" id="" class="form-control">
                                            <option value="{{$course->status}}" selected>{{$course->status}}</option>
                                            <option value="">Chọn yêu cầu</option>
                                            <option value="open">Open</option>
                                            <option value="close">Close</option>
                                        </select>
                                    </div>
                                </div> --}}

                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Gia sư</label>
                                    <div class="col-sm-10">
                                        <select name="teacher_id" id="" class="form-control">
                                            <option value="">Chọn gia sư</option>

                                            @foreach($teachers as $t)
                                            <option value="{{$t->id}}">{{$t->id}} - {{$t->name}}</option>

                                            @endforeach
                                            
                                        </select>
                                    </div>
                                </div>

                               
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" name="gui" id="" value="Cập nhật"  class="btn btn-primary" >
                                        <input type="reset" name="" id="" value="Nhập lại"  class="btn btn-primary" >
                                        <a href=""><input type="button" value="Danh sách"  class="btn btn-primary"></a>
                                    </div>
                                </div>

                            </form>
                            <div class="row">
                                <div class="col-7">
                                    @if (isset($_SESSION['errors']) && isset($_GET['msg']))
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($_SESSION['errors'] as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>   
            </div>
        </div>
    </div>
</div>


@endsection
