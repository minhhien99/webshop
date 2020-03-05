@extends('admin.layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            Thêm Sản Phẩm <a href="{{route('admin.product.index')}}" class="btn btn-success pull-right"><i class="fa fa-list"></i> Danh Sách</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin Sản Phẩm</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Tên Sản Phẩm</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên">
                            </div>
                            <div class="form-group">
                                <label for="image">Ảnh</label>
                                <input type="file" id="image" name="image">
                            </div>
                            <div class="form-group">
                                <label for="stock">Số lượng</label>
                                <input type="text" class="form-control" id="stock" name="stock" placeholder="Số lượng">
                            </div>
                            <div class="form-group">
                                <label for="price">Giá Gốc(vnđ)</label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="Giá Gốc">
                            </div>
                            <div class="form-group">
                                <label for="sale">Giá Khuyến Mãi(vnđ)</label>
                                <input type="text" class="form-control" id="sale" name="sale" placeholder="Giá KM">
                            </div>
                            <div class="form-group">
                                <label>Danh mục Sản Phẩm</label>
                                <select class="form-control" name="category_id">
                                    <option value="0">-- chọn --</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category -> id }}">{{ $category -> name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Thương Hiệu</label>
                                <select class="form-control" name="brand_id">
                                    <option value="0">-- chọn --</option>
                                    @foreach($brands as $brand)
                                        <option value="{{ $brand -> id }}">{{ $brand -> name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nhà Cung Cấp</label>
                                <select class="form-control" name="vendor_id">
                                    <option value="0">-- chọn --</option>
                                    @foreach($vendors as $vendor)
                                        <option value="{{ $vendor -> id }}">{{ $vendor -> name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mã hàng (SKU)</label>
                                <input type="text" class="form-control w-50" id="sku" name="sku" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Vị trí</label>
                                <input type="number" class="form-control w-50" id="position" name="position" value="0">
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1" name="is_active"> <b>Trạng thái</b>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1" name="is_hot"> <b>Sản phẩm Hot</b>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Liên kết (url) tùy chỉnh</label>
                                <input type="text" class="form-control" id="url" name="url" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Tóm tắt</label>
                                <textarea id="editor2" name="summary" class="form-control" rows="10" ></textarea>
                            </div>

                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea id="editor1" name="description" class="form-control" rows="10" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta Title</label>
                                <input type="text" class="form-control" id="meta_title" name="meta_title" >
                            </div>
                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea name="meta_description" class="form-control" rows="3" ></textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Tạo</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->


            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
@endsection

@section('my_javascript')
    <script type="text/javascript">
        $(function () {
            // setup textarea sử dụng plugin CKeditor
            var _ckeditor = CKEDITOR.replace('editor1');
            _ckeditor.config.height = 500; // thiết lập chiều cao
            var _ckeditor = CKEDITOR.replace('editor2');
            _ckeditor.config.height = 200; // thiết lập chiều cao
        })
    </script>
@endsection
