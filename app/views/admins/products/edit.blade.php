@extends('admins.layouts.main')
@section('title', 'Sửa sản phẩm')
@section('content')
    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <br> <br>
                    <label for="formGroupExampleInput">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name" value="{{ $pro->name }}">
                </div>

                <div class=" form-group">
                    <label for="formGroupExampleInput2">Giá</label>
                    <input type="text" class="form-control" name="price" value="{{ $pro->price }}">
                </div>
                <div class=" form-group">
                    <label for="formGroupExampleInput2">Danh mục</label>
                    <br>
                    <select style="border-color:#ced4da;border-radius:3px" name="cate_id">
                        @foreach ($cate as $c)
                            <option value="{{ $c->id }}">{{ $c->cate_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <br><br>
                    <label for="formGroupExampleInput">Sao</label>
                    <input type="text" class="form-control" name="star" value="{{ $pro->star }}">
                </div>
                <div class=" form-group">
                    <label for="formGroupExampleInput2">Lượt xem</label>
                    <input type="text" class="form-control" name="views" value="{{ $pro->views }}">
                </div>
            </div>
            <div class="col-md-12">

                <div class="form-group">
                    <label for="formGroupExampleInput">Ảnh</label>
                    <br>
                    @if ($pro->image != '')
                        <input type="hidden" name="image" value="{{ $pro->image }}">
                        <img src="{{ $pro->image }}" alt="" width="200px">
                    @endif
                    <input style="border: none;" type="file" class="form-control" name="image">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Tiêu đề</label>
                            <textarea name="short_desc" id="desc" cols="90" rows="10">{{ $pro->short_desc }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" form-group">
                            <label for="formGroupExampleInput2">Chi tiết</label> <br>
                            <textarea name="detail" id="detail" cols="90" rows="10">{{ $pro->detail }}</textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" name="btn" class="btn btn-outline-success">Lưu</button>
            </div>
        </div>

    </form>
@endsection
@section('js')
    <script>
        CKEDITOR.replace('desc');
        CKEDITOR.replace('detail');

    </script>
@endsection
