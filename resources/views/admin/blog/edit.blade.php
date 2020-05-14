@extends('admin.layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            Chỉnh sửa bài viết <a href="{{route('admin.blog.index')}}" class="btn btn-success pull-right"><i class="fa fa-list"></i> Danh Sách bài viết</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-9">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin bài viết</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.blog.update', ['id' => $blog->id ])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tiêu đề bài viết</label>
                                <input value="{{ $blog->title }}" type="text" class="form-control" id="title" name="title" placeholder="Nhập tên tiêu đề">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Thay đổi ảnh</label>
                                <input type="file" id="new_image" name="new_image">
                                <!-- Hiển thị ảnh cũ -->
                                <br>
                                <img src="{{ asset($blog->image) }}" width="250">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tác giả</label>
                            <input type="text" class="form-control" id="user_id" name="user_id" value="{{$blog->user_id }}" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Link</label>
                                <input value="{{ $blog->url }}" type="text" class="form-control" id="url" name="url" placeholder="Url">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Vị trí</label>
                                <input type="number" class="form-control" id="position" name="position" placeholder="Nhập tên vị trí" value="{{ $blog->position }}">
                            </div>
                            <div class="form-group">
                                <label>Nội Dung</label>
                            <textarea  id="editor1" name="description" class="form-control" rows="10" >{{ $blog->description }}</textarea>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="1" name="is_active" {{ ($blog->is_active == 1) ? 'checked' : '' }} > Trạng thái hiển thị
                                </label>
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
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
            _ckeditor.config.height = 450; // thiết lập chiều cao
        })
    </script>
@endsection
