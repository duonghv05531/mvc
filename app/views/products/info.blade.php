@extends('layouts.main')

@section('title', 'Danh sách sản phẩm')

@section('content')

    <section class="feat-product">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img style="width: 400px" src="{{ $info->image }}" alt="">
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <h3 class="sec-title">{{ $info->name }}</h3>
                                <p>{{ $info->price }} $</p>
                                <p>{{ $info->short_desc }}</p>
                                <p>{{ $info->detail }}</p>
                                <button class="btn-sm btn-success" style="border: none">Mua </button>
                            </div>
                            @if (isset($_SESSION[AUTH]))
                                <div class="col-md-6">
                                    <br>
                                    <form action="{{ bsUrl . 'comment?id=' . $info->id }}" method="POST">
                                        <input type="text" name="content">
                                        <button style="border: none" type="submit" class="btn-sm btn-success"
                                            name="btn-comment">Bình luận</button>
                                    </form>
                                </div>
                            @endif
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <br>
                                    @foreach ($comments as $c)
                                        <p><strong>{{ $c->name }}</strong> <br> {{ $c->content }}</p>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </section>

@endsection
