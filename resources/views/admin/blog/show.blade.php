@extends('admin.layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            Chi Tiết Bài Viết <a href="{{route('admin.blog.index')}}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Danh sách Bài Viết</a>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <!-- form start -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td><b>Tiêu Đề </b></td>
                                <td>{{ $data->title }}</td>
                            </tr>
                            <tr>
                                <td><b>Hình ảnh:</b></td>
                                <td><img src="{{ asset($data->image) }}" width="250"></td>
                            </tr>
                            <tr>
                                <td><b>User_id</b></td>
                                <td>{{ $data->user_id }}</td>
                            </tr>
                            <tr>
                                <td><b>Link</b></td>
                                <td>{{ $data->url }}</td>
                            </tr>
                            <tr>
                                <td><b>Vị trí:</b></td>
                                <td>{{ $data->position }}</td>
                            </tr>
                            <tr>
                                <td><b>Nội Dung</b></td>
                                <td>{!! $data->description !!}</td>
                            </tr>
                            <tr>
                                <td><b>Trạng thái</b></td>
                                <td>{{ ($data->is_active == 1) ? 'Hiện thị' : 'Ẩn'  }}</td>
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
