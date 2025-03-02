@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/products.css')}}">
@endsection

@section('content')
<div class="product">
    <div class="product-header">
        <h2 class="product-header__heading">商品一覧</h2>
        <a class="product-header__link" href="/products/register">+商品を追加</a>
    </div>

    <div class="product-main">
        <aside class="product-main__sidebar">
            <form class="search-form" action="/products/search" method="get">
                @csrf
                <input class="search-form__input" type="text" placeholder="商品名で検索">
                <div class="search-form__action" >
                    <input class="search-form__btn" type="submit" value="検索">
                </div>
            </form>
        </aside>

        <div class="product-main__inner">
            @foreach($products as $product)
            <div class="product-card">
                <img src="" alt="商品画像">
                <div class="product-card__text">
                    <p>{{$product->name}}</p>
                    <p>{{$product->price}}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>

</div>









@endsection
