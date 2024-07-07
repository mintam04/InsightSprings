@extends('layout.quanlytaikhoan')

@section('title', 'Hồ sơ thông tin')

@section('content')
    <div class="">
        <form action="{{ route('/post-ho-so-thong-tin') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h5>Thông tin cơ bản</h5>
            <p><b>Ảnh hồ sơ:</b></p>
            <p>Sử dụng ảnh hồ sơ rõ khuôn mặt, nền ảnh đơn giản và nghiêm túc. Ảnh chỉ bao gồm mình bạn, không bị lẫn thêm
                người khác.</p>
            <?php
                $path1 = isset($_SESSION['teacher']->profile_picture) ? $_SESSION['teacher']->profile_picture : null;
                if ($path1 !== null) {
                    $filename1 = basename($path1);
                    $imagePath1 = 'http://localhost/duAnCaNhan/public/img/' . $filename1;
                } else {
                    $imagePath1 = ''; 
                }

                $path2 = isset($_SESSION['teacher']->img_graduation) ? $_SESSION['teacher']->img_graduation : null;
                if ($path2 !== null) {
                    $filename2 = basename($path2);
                    $imagePath2 = 'http://localhost/duAnCaNhan/public/img/' . $filename2;
                } else {
                    $imagePath2 = ''; 
                }
                
            // echo $imagePath;
            
            ?>
            <div class="mt-5">
                <span>Click để thêm ảnh</span>
                <input type="file" name="profile_picture" id="">
                @if (isset($_SESSION['teacher']->profile_picture))
                    <img src="{{ $imagePath1 }}" alt="Profile Picture" style="height: 200px">
                @else
                    <p>Không có ảnh đại diện được chọn</p>
                @endif
            </div>

            <div class="mb-3 mt-3">
                <div class="row mt-5">
                    <div class="col-4">
                        <span class="form-label"><b>Họ và tên:</b></span>
                        <input type="text" class="form-control rounded-0 border-black" name="name"
                            value="{{ $_SESSION['user']->name ?? '' }}">
                    </div>
                    <div class="col-4">
                        <span class="form-label"><b>Điện thoại:</b></span>
                        <input type="text" class="form-control rounded-0 border-black" name="phone"
                            value="{{ $_SESSION['teacher']->phone_number ?? '' }}">
                    </div>
                    <div class="col-4">
                        <span class="form-label"><b>Email:</b></span>
                        <input type="text" class="form-control rounded-0 border-black" name="email"
                            value="{{ $_SESSION['user']->email ?? '' }}">
                    </div>
                </div>
                <div class="row mt-4 mb-4">
                    <div class="col-3">
                        <span class="form-label"><b>Giới tính:</b></span>
                        <select name="sex" id="" class="form-control rounded-0 border-black">
                            <option value="">Lựa chọn</option>
                            <option value="Nam"
                                {{ isset($_SESSION['teacher']->sex) && $_SESSION['teacher']->sex == 'Nam' ? 'selected' : '' }}>
                                Nam</option>
                            <option value="Nữ"
                                {{ isset($_SESSION['teacher']->sex) && $_SESSION['teacher']->sex == 'Nữ' ? 'selected' : '' }}>
                                Nữ</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <span class="form-label"><b>Năm sinh:</b></span>
                        <input type="text" class="form-control rounded-0 border-black" name="year_of_birth"
                            value="{{ $_SESSION['teacher']->year_of_birth ?? '' }}">
                    </div>
                    <div class="col-6"></div>
                </div>
            </div>
            <h5 class="text-blue-500">Học vấn (Đại học, cao đẳng):</h5>
            <div class="row mt-4 mb-4">
                <div class="col-6">
                    <span class="form-label"><b>Tên trường học:</b></span>
                    <input type="text" class="form-control rounded-0 border-black" name="school"
                        value="{{ $_SESSION['teacher']->school ?? '' }}">
                </div>
                <div class="col-6">
                    <span class="form-label"><b>Ngành học:</b></span>
                    <input type="text" class="form-control rounded-0 border-black" name="major"
                        value="{{ $_SESSION['teacher']->major ?? '' }}">
                </div>
            </div>

            <h5 class="text-blue-500">Xác minh học vấn:</h5>
            <div class="mb-4">
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio1" name="verify_education"
                        value="Xác minh khi nhận lớp tại trung tâm"
                        {{ isset($_SESSION['teacher']->verify_education) && $_SESSION['teacher']->verify_education == 'Xác minh khi nhận lớp tại trung tâm' ? 'checked' : '' }}>
                    <label class="form-check-label" for="radio1">Xác minh khi nhận lớp tại trung tâm</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio2" name="verify_education"
                        value="Xác minh bằng cách upload ảnh"
                        {{ isset($_SESSION['teacher']->verify_education) && $_SESSION['teacher']->verify_education == 'Xác minh bằng cách upload ảnh' ? 'checked' : '' }}>
                    <label class="form-check-label" for="radio2">Xác minh bằng cách upload ảnh</label>
                    <div id="uploadField" style="display: none;">
                        <p class="mt-4">Upload ảnh Thẻ sinh viên hoặc Bằng tốt nghiệp của bạn.</p>
                        <b class="mt-4 mb-3">Ảnh xác minh:</b> <br>
                        <input type="file" name="img_graduation" id="verification_image" class="mt-4">
                        @if (isset($_SESSION['teacher']->img_graduation))
                            <img src="{{ $imagePath2 }}" alt="Verification Image" style="height: 200px">
                        @else
                            <p>Không có ảnh xác minh được chọn</p>
                        @endif
                        
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary" name="gui">Cập nhật</button>
                    </div>

        </form>
    </div>
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

@endsection

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const radio1 = document.getElementById('radio1');
        const radio2 = document.getElementById('radio2');
        const uploadField = document.getElementById('uploadField');

        radio1.addEventListener('change', function() {
            if (this.checked) {
                uploadField.style.display = 'none';
            }
        });

        radio2.addEventListener('change', function() {
            if (this.checked) {
                uploadField.style.display = 'block';
            }
        });

        // Set initial visibility based on the default selected option
        if (radio1.checked) {
            uploadField.style.display = 'none';
        } else if (radio2.checked) {
            uploadField.style.display = 'block';
        }
    });
</script>
