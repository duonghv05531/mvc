@extends('admins.layouts.main')
@section('title', 'Thêm danh mục')
@section('content')
    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-4 offset-3" style="margin: auto">
                <br>
                <h3 class="text-center text-info">TẠO MỚI DANH MỤC</h3>
                <div class="form-group">
                    <br>
                    <label for="cate_name">Tên danh mục:</label>
                    <input type="text" class="form-control" name="cate_name">
                </div>
                <div class="form-group">
                    <label for="slug">Slug:</label>
                    <input type="text" class="form-control" name="slug">
                </div>
                <div class="form-group">
                    <label for="desc">Mô tả:</label>
                    <input type="text" class="form-control" name="desc">
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="show_menu" type="checkbox" value="1" id="show_menu">
                    <label class="form-check-label" for="show_menu">Hiển thị tại menu</label>
                </div>
                <div class="form-group">
                    <br>
                    <button type="submit" name="btn" class="btn btn-outline-success">Thêm</button>
                </div>

            </div>
        </div>
    </form>
@endsection
