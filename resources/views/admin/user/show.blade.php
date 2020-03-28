@extends('admin.layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            Chi Tiết User <a href="{{route('admin.user.index')}}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Danh sách User</a>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <div class="box box-primary">
                    <!-- form start -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td><b>Họ Và Tên</b></td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td><b>Email</b></td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td><b>Ảnh đại diện</b></td>
                                <td><img src="{{ asset($user->avatar) }}" width="250"></td>
                            </tr>

                            <tr>
                                <td><b>Phân Quyền</b></td>
                                <td>{{ ($user->role_id == 1) ? 'Quản Lý' : 'Người Dùng' }}</td>
                            </tr>
                            <tr>
                                <td><b>Kích Hoạt Tài Khoản</b></td>
                                <td>{{ ($user->is_active == 1) ? 'Hiện thị' : 'Ẩn'  }}</td>
                            </tr>

                            </tbody></table>
                    </div>
                </div>
                <!-- /.box -->


            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
@endsection
