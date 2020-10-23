@extends('layouts.main')

@section('title', 'Thông tin sản phẩm')

@section('content')
    <section class="feat-product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <img style="width: 400px" src="{{ $info->image }}" alt="">
                        </div>
                        <div class="col-6">
                            <h3 class="sec-title">{{ $info->name }}</h3>
                            <p>{{ $info->price }} $</p>
                            <p>{{ $info->short_desc }}</p>
                            <p>{{ $info->detail }}</p>
                            <button class="btn-sm btn-default" style="border: none">Mua ngay
                            </button>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-12">
                    <div class="row">
                        @if (isset($_SESSION[AUTH]))
                            <div class="col-md-6">
                                <br>
                                <h4>Để lại đánh giá</h4>
                                <form action="{{ bsUrl . 'comment?id=' . $info->id }}" method="POST">
                                    <label for="content">{{ $_SESSION[AUTH]['name'] }}</label> <br>
                                    <input type="text" name="content">
                                    <br><br>
                                    <button style="border: none" type="submit" class="btn-sm btn-default"
                                        name="btn-comment">Bình luận</button>
                                </form>
                            </div>
                        @endif
                        <div class="col-md-6">
                            <br>
                            @foreach ($comments as $c)
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="{{ $c->avatar }}" alt="" style="width: 100%">
                                    </div>
                                    <div class="col-md-9">

                                        <p><strong>{{ $c->name }}</strong>
                                        </p>
                                        <p>{{ $c->content }}</p>
                                        <p>
                                            @if (isset($_SESSION[AUTH]['name']) && $c->uid == $_SESSION[AUTH]['id'])
                                                <a class="btn-sm btn-danger"
                                                    onclick="confirmRemove('{{ bsUrl . 'comment-delete?id=' . $c->id . '&pid=' . $info->id }}')"
                                                    href="javascript:;">Xóa</a>
                                                <button class="btn-sm btn-success cmt">Sửa</button>
                                                <form class=" comment" name="comment" style="display: none"
                                                    action="{{ bsUrl . 'comment-edit?id=' . $c->id . '&pid=' . $info->id }}"
                                                    method="POST">
                                                    <input type="text" name="content" id="content">
                                                    <button name="btn-comment" class="btn-sm btn-success">Lưu</button>
                                                </form>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        var cmt = document.getElementsByClassName("cmt");
        var content = document.getElementsByClassName("comment");

        for (i = 0; i < cmt.length; i++) {
            cmt[i].onclick = function() {
                content[i].style.display = "block"
            }
        }


        // var c = document.forms["comment"].elements[0];
        // // var b = document.forms["comment"]["tbn"];
        // c.style.backgroundColor = "red";
        // c.setAttribute("type", "text");
        // b.style.display = "block";

    </script>
    <script>
        function confirmRemove(removeurl) {
            alertify.confirm(
                'Thông báo',
                'Bạn chắc chắn muốn xóa bình luận này ?',
                function() {
                    window.location.href = removeurl;
                },
                function() {
                    alertify.confirm().close();
                }
            );
        }

    </script>
@endsection
