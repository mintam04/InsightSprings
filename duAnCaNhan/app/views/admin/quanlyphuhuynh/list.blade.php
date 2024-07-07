@extends('layout.admin')

@section('title', 'List phụ huynh')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Danh sách phụ huynh đăng ký thuê gia sư</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th><strong>ID</strong></th>
                                            <th><strong>Họ và tên </strong></th>
                                            <th><strong>Giới tính </strong></th>
                                            <th><strong>Số điện thoại</strong></th>
                                            <th><strong>Địa chỉ</strong></th>
                                            <th><strong>Ghi chú</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($parents as $p)
                                        <tr>
                                            <td><strong>{{$p->id}}</strong></td>
                                            <td>{{$p->name}}</td>
                                            <td>{{$p->sex_parents}}</td>
                                            <td>{{$p->phone}} </td>
                                            <td>{{$p->sex_address}}</td>
                                            <td>{{$p->take_note}}</td>
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
