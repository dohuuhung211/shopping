@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Category', 'key' => 'Add'])

    <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('categories.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input type="text"
                                       class="form-control"
                                       name="name"
                                       placeholder="Nhap ten danh muc">
                            </div>
                            <div class="form-group">
                                <label>Chọn danh mục cha</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0">Danh muc cha</option>
                                    {!! $htmlOption !!}
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection



