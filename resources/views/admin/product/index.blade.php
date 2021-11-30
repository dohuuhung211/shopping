@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection


@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Product', 'key' => 'list'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('products.create') }}" class="btn btn-success float-right m-2">Add</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Giá sản phẩm</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
{{--                            @foreach($categories as $category)--}}
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Iphone 10 </td>
                                    <td>30.000.000</td>
                                    <td>
                                        <img src="">
                                    </td>
                                    <td>Điện thoại</td>
                                    <td>
                                        <a href="" class="btn btn-default">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>

                                </tr>
{{--                            @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                    {{--                    {{ $categories->links() }}--}}
                </div>
            </div>
        </div>
    </div>
@endsection



