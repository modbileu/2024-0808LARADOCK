@extends('layout.master')

@section('content')
<div class="container">
    <div class="single-product">
        <h1>{{ $merchandise->name }}</h1>
        <div class="product">
            <div class="row gutter-40">
                <div class="col-md-5">
                    <!-- 商品图片 -->
                    <div class="product-image">
                        <a href="{{ asset($merchandise->photo) }}" title="{{ $merchandise->name }}" data-lightbox="gallery-item">
                            <img src="{{ asset($merchandise->photo) }}" alt="{{ $merchandise->name }}">
                        </a>
                    </div>
                </div>
                <div class="col-md-5 product-desc">
                    <!-- 商品价格 -->
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="product-price"><ins>{{ $merchandise->name }}</ins></div>
                    </div>
                    <div class="line"></div>
                    <!-- 商品介绍 -->
                    <p>{{ $merchandise->introduction }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
