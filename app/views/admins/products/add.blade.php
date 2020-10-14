@extends('admins.layouts.main')
@section('title', 'Thêm sản phẩm')
@section('content')
    <form method="POST" enctype="multipart/form-data">
        <div class="col-md-9" style="margin: auto">
            <div class="row">
                <div class="col-md-9" style="margin: auto">
                    <br>
                    <h3 class="text-center text-info">TẠO MỚI DANH MỤC</h3>
                </div>
                <div class="col-4" style="margin: auto">
                    <div class="form-group">
                        <br><br>
                        <label for="name">Tên sản phẩm</label>
                        <input type="text" class="form-control" name="name" id="name">
                        @if (isset($nameerr))
                            <small class="text-danger">{{ $nameerr }}</small>
                        @endif
                    </div>
                    <div class="form-group" style=" margin:0">
                        <label for="image">Ảnh</label>
                        <input style="border: none;" type="file" class="form-control" name="image" id="image">
                        @if (isset($imageerr))
                            <small class="text-danger">{{ $imageerr }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="price">Giá</label>
                        <input type="text" class="form-control" name="price" id="price">
                        @if (isset($priceerr))
                            <small class="text-danger">{{ $priceerr }}</small>
                        @endif
                    </div>
                </div>
                <div class="col-4" style="margin: auto">
                    <div class="form-group">
                        <br><br>
                        <label for="star">Sao</label>
                        <input type="text" class="form-control" name="star" id="star">
                        @if (isset($starerr))
                            <small class="text-danger">{{ $starerr }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="cate_id">Danh mục</label>
                        <br>
                        <select style="border-color:#ced4da;border-radius:3px;" name="cate_id" id="cate_id">
                            @foreach ($cate as $c)
                                <option value="{{ $c->id }}">{{ $c->cate_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="views">Lượt xem</label>
                        <input type="text" class="form-control" name="views" id="views">
                        @if (isset($viewserr))
                            <small class="text-danger">{{ $viewserr }}</small>
                        @endif
                    </div>

                </div>
                <div class="col-md-12" style="margin: auto">
                    <div class="row">
                        <div class="col-4" style="margin: auto">
                            <div class="form-group">
                                <br> <br>
                                <label for="short_desc">Tiêu đề</label> <br>
                                <textarea name="short_desc" id="shortdesc" cols="90" rows="10"></textarea>
                                @if (isset($short_descerr))
                                    <small class="text-danger">{{ $short_descerr }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="col-4" style="margin: auto">
                            <br><br>
                            <div class=" form-group">
                                <label for="detail">Chi tiết</label> <br>
                                <textarea name="detail" id="detail" cols="90" rows="10"></textarea>
                                @if (isset($detailerr))
                                    <small class="text-danger">{{ $detailerr }}</small>
                                @endif
                            </div>

                        </div>
                        <div class="col-10" style="margin: auto">
                            <button type="submit" name="btn" class="btn btn-outline-success">Thêm</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
@endsection
@section('js')
    <script>
        CKEDITOR.replace('short_desc');
        CKEDITOR.replace('detail');

    </script>
@endsection
