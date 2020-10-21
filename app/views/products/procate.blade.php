@extends('layouts.main')

@section('title', 'Sản phẩm theo danh mục')

@section('content')

    <section class="feat-product">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="sec-heading">
                        <h3 class="sec-title">Sản phẩm nổi bật</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @if (isset($data['nofi']))
                    {{ $data['nofi'] }}
                @else
                    @foreach ($procate as $p)
                        <div class="col-sm-4">
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <img src="{{ bsUrl . $p->image }}" alt="" />
                                    <div class="action-links">
                                        <a href="{{ bsUrl . 'info?id=' . $p->id }}" class="quick-view icon"><i
                                                class="ti-eye"></i></a>
                                        <a href="#" class="wishlist icon"><i class="ti-heart"></i></a>
                                        <a href="#" class="add-cart icon"><i class="ti-shopping-cart"></i></a>
                                    </div>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-name"><a href="#">{{ $p->name }}</a></h5>
                                    <div class="ratings">
                                        @for ($i = 0; $i < $p->star; $i++)
                                            <a href="#"><i class="ti-star"></i></a>
                                        @endfor
                                    </div>
                                    <p class="price">{{ $p->price }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

@endsection
