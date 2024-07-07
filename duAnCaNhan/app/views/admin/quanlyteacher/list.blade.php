@extends('layout.admin')

@section('title', 'List gia sư')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Danh sách gia sư</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th><strong>ID</strong></th>
                                            <th><strong>Họ và tên </strong></th>
                                            <th><strong>Ảnh đại diện</strong></th>
                                            <th><strong>Email </strong></th>
                                            <th><strong>Giới tính</strong></th>
                                            <th><strong>Số điện thoại</strong></th>
                                            <th><strong>Năm sinh</strong></th>
                                            <th><strong>Trường</strong></th>
                                            <th><strong>Ngành học</strong></th>
                                            <th><strong>Cách xác minh học vấn</strong></th>
                                            <th><strong>Bằng tốt nghiệp</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($teachers as $t)
                                            @php    
                                                if ($t->profile_picture !== null) {
                                                    $filename1 = basename($t->profile_picture);
                                                    $imagePath1 = 'http://localhost/duAnCaNhan/public/img/' . $filename1;
                                                } else {
                                                    $imagePath1 = ''; 
                                                }
                                                if ($t->img_graduation !== null) {
                                                    $filename = basename($t->img_graduation);
                                                    $imagePath = 'http://localhost/duAnCaNhan/public/img/' . $filename;
                                                } else {
                                                    $imagePath = ''; 
                                                }
                                            @endphp
                                        <tr>
                                            <td><strong>{{$t->id}}</strong></td>
                                            <td>{{$t->name}}</td>
                                            <td><img src="{{$imagePath1}}" alt="" class="me-3 rounded" width="150" height="150"></td>
                                            <td>{{$t->email}} </td>
                                            <td>{{$t->sex}}</td>
                                            <td>{{$t->phone_number}}</td>
                                            <td>{{$t->school}}</td>
                                            <td>{{$t->year_of_birth}}</td>
                                            <td>{{$t->major}}</td>
                                            <td>{{$t->verify_education}}</td>
                                            <td><img src="{{$imagePath}}" alt="" class="me-3 rounded" width="150" height="150"></td>
                                        </tr>

                                        @endforeach
                                    </tbody>

                                </table>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
