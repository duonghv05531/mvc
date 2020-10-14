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
                    <h3 class="sec-title">{{ $info->name }}</h3>
                    <p>{{ $info->price }} $</p>
                    <p>{{ $info->short_desc }}</p>
                    <p>{{ $info->detail }}</p>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </section>

@endsection
