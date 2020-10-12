@extends('admins.layouts.main')
@section('title', 'Thêm danh mục')
@section('content')
    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-4 offset-3" style="margin: auto">
                <h3 class="text-center text-info">Cập nhật danh mục</h3>
                <div class="form-group">
                    <br>
                    <label for="formGroupExampleInput">Tên danh mục</label>
                    <input type="text" class="form-control" name="cate_name" value="{{ $cate->cate_name }}">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Slug</label>
                    <input type="text" class="form-control" name="slug" value="{{ $cate->slug }}">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Mô tả</label>
                    <input type="text" class="form-control" name="desc" value="{{ $cate->desc }}">
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="show_menu" type="checkbox" value="1" id="show_menu" @if ($cate->show_menu == 1)
                    checked
                    @endif

                    >
                    <label class="form-check-label" for="show_menu">Hiển thị tại menu</label>
                </div>
                <div class="form-group">
                    <br>
                    <button type="submit" name="btn" class="btn btn-outline-success">Lưu</button>
                </div>

            </div>
        </div>
    </form>
@endsection
