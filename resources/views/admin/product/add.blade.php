@extends('layouts.admin')

@section('title')
    <title>Thêm sản phẩm</title>
@endsection

@section('css')
    <link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admins/product/add/add.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Product', 'key' => 'Add'])

    <!-- /.content-header -->

        <!-- Main content -->
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text"
                                       class="form-control"
                                       name="name"
                                       placeholder="Nhap ten sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Giá sản phẩm</label>
                                <input type="text"
                                       class="form-control"
                                       name="price"
                                       placeholder="Nhap giá sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Ảnh đại diện</label>
                                <input type="file"
                                       class="form-control-file"
                                       name="feature_image_path">
                            </div>
                            <div class="form-group">
                                <label>Ảnh chi tiết</label>
                                <input type="file"
                                       multiple
                                       class="form-control-file"
                                       name="image_path[]">
                            </div>
                            <div class="form-group">
                                <label>Chọn danh mục</label>
                                <select class="form-control select2_init" name="parent_id">
                                    <option value="">Danh muc cha</option>
                                    {!! $htmlOption !!}
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nhập tags cho sản phẩm</label>
                                <select name="tags[]" class="form-control tags_select_choose" multiple="multiple">

                                </select>
                            </div>

                        </div>
                        <div class="con-md-12">
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea name="content" class="form-control tinymce_editor_init" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        <!-- /.content -->
    </form>
    </div>
@endsection

@section('js')
    <script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
    <script src="https://cdn.tiny.cloud/1/iz9opy26d938dsjop2o2mx4qwxcpjsio4tmhiw355nx99f1k/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('admins/product/add/add.js') }}"></script>
@endsection



