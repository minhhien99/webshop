@extends('admin.layouts.main')
@section('content')
<section class="content-header">
    <h1>
        Chi Tiết Danh Mục <a href="{{route('admin.category.index')}}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Danh sách Danh Mục</a>
    </h1>
</section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <h1>
                    Thông tin chi tiết danh mục
                </h1>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin danh mục</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td><b>Tên danh mục:</b></td>
                                <td>{{ $data->name }}</td>
                            </tr>
                            <tr>
                                <td><b>Hình ảnh:</b></td>
                                <td>{{ $data->image }}</td>
                            </tr>
                            <tr>
                                <td><b>Danh mục cha:</b></td>
                                <td>{{ $data->parent->name or '(trống)' }}</td>
                            </tr>
                            <tr>
                                <td><b>Vị trí:</b></td>
                                <td>{{ $data->position }}</td>
                            </tr>
                            <tr>
                                <td><b>Trạng thái</b></td>
                                <td>{{ $data->is_active }}</td>
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
