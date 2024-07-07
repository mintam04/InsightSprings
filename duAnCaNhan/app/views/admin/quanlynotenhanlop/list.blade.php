@extends('layout.admin')

@section('title', 'List phụ huynh')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Danh sách note nhận lớp</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th><strong>ID note</strong></th>
                                            <th><strong>Mã lớp</strong></th>
                                            <th><strong>ID Gia sư </strong></th>
                                            <th><strong>Họ và Tên Gia sư</strong></th>
                                            <th><strong>Trạng thái</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($notenhanlop as $n)
                                        <tr>
                                            <td><strong>{{$n->id}}</strong></td>
                                            <td>{{$n->course_code}}</td>
                                            <td>{{$n->teacher_id}}</td>
                                            <td>{{$n->teacher_name}} </td>
                                            <td>{{$n->status_ct}}</td>
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
