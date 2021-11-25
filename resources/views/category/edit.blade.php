@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Category', 'key' => 'Edit'])

    <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('categories.update', ['id' => $category->id]) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Ten danh muc</label>
                                <input type="text"
                                       class="form-control"
                                       name="name"
                                       value="{{ $category->name }}"
                                       placeholder="Nhap ten danh muc">
                            </div>
                            <div class="form-group">
                                <label>Chon danh muc cha</label>
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



