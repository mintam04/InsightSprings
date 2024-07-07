@extends('layout.admin')

@section('title', 'List lớp')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Danh sách lớp</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th><strong>ID</strong></th>
                                            <th><strong>Mã lớp </strong></th>
                                            <th><strong>Môn học - Lớp </strong></th>
                                            <th><strong>Địa chỉ</strong></th>
                                            <th><strong>Giới tính</strong></th>
                                            <th><strong>Mô tả học sinh</strong></th>
                                            <th><strong>Thông tin thêm</strong></th>
                                            <th><strong>Học phí mỗi tháng</strong></th>
                                            <th><strong>Số buối học/tuần</strong></th>
                                            <th><strong>Thời gian học</strong></th>
                                            <th><strong>Yêu cầu</strong></th>
                                            <th><strong>Tình trạng</strong></th>
                                            <th><strong>Id gia sư</strong></th>
                                            <th><strong>Id phụ huynh</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($courses as $c)
                                        <tr>
                                            <td>
                                                <strong>{{$c->id}}</strong>
                                                <a href="{{route('/adminupdatecourse'.'/'.$c->id)}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>      											
                                            </td>
                                            <td>{{$c->code}}</td>
                                            <td>{{$c->subject}} - Lớp {{$c->class}}</td>
                                            <td>{{$c->address}}, Quận {{$c->district}}, Hà Nội</td>
                                            <td>{{$c->sex_student}}</td>
                                            <td>{{$c->des_student}}</td>
                                            <td>{{$c->add_information}}</td>
                                            <td>{{$c->fee}}</td>
                                            <td>{{$c->sessions_week	}} buổi/tuần</td>
                                            <td>{{$c->time_learn}}</td>
                                            <td>{{$c->request}}</td>
                                            <td>{{$c->status}}</td>
                                            <td>{{$c->teacher_id}}</td>
                                            <td>{{$c->parents_id}}</td>
                                        </tr>

                                        @endforeach
                                    </tbody>

                                </table>
                                <div>
                                    <a href="{{route('/adminpostcourse')}}"><input type="button" value="Thêm lớp"  class="btn btn-primary mb-4"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 

@endsection
