@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection

@section('content')
<div class="register-form">
 <h2 class="register-form__heading">商品登録</h2>
 <div class="register-form__inner">
  <form action="/products/register" method="post">
    @csrf
    <div class="register-form__group">
     <label class="register-form-label" for="name">
      商品名<span class="register-form__required">必須</span>
     </label>
     <div class="register-form__name-inputs">
      <input class="register-form__name-input" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="商品名を入力">
      <p class="register-form__error-message">
          @error('name')
          {{ $message }}
          @enderror
      </p>
     </div>
    </div>

    <div class="register-form__group">
     <label class="register-form-label" for="price">
      値段<span class="register-form__required">必須</span>
     </label>
     <div class="register-form__price-inputs">
      <input class="register-form__price-input" type="text" name="price" id="price" value="{{ old('price') }}" placeholder="値段を入力">
      <p class="register-form__error-message">
          @error('price')
          {{ $message }}
          @enderror
      </p>
     </div>
    </div>

    <div class="register-form__group">
     <label class="register-form-label" for="">
      商品画像<span class="register-form__required">必須</span>
     </label>
     <div class="register-form__image-inputs">
      <input class="register-form__image-input" type="file" name="image" accept="image/png, image/jpeg">
      <p class="register-form__error-message">
          @error('image')
          {{ $message }}
          @enderror
      </p>
     </div>
    </div>

    <div class="register-form__group">
     <label class="register-form-label" for="">
      季節<span class="register-form__required">必須</span>
     </label>
     <div class="register-form__season-inputs">
      <div class="register-form__season-option">
       <label class="register-form__season-label">
        <input class="register-form__season-input" name="season" type="radio" id="" >
        <span class="register-form__season-text">春</span>
       </label>
      </div>
      <div class="register-form__season-option">
       <label class="register-form__season-label">
        <input class="register-form__season-input" type="radio" name="season" id="">
        <span class="register-form__season-text">夏</span>
       </label>
      </div>
      <div class="register-form__season-option">
       <label class="register-form__season-label">
        <input class="register-form__season-input" type="radio" name="season" id="">
        <span class="register-form__season-text">秋</span>
       </label>
      </div>
      <div class="register-form__season-option">
       <label class="register-form__season-label">
        <input class="register-form__season-input" type="radio" name="season" id="">
        <span class="register-form__season-text">冬</span>
       </label>
      </div>
     </div>
     <p class="register-form__error-message">
        @error('')
        {{ $message }}
        @enderror
     </p>
    </div>

    <div class="register-form__group">
     <label class="register-form-label" for="description">
      商品説明<span class="register-form__required">必須</span>
     </label>
     <textarea class="register-form__textarea" name="description" id="" cols="30" rows="10"
          placeholder="商品の説明を入力">{{ old('description') }}</textarea>>
      <p class="register-form__error-message">
          @error('description')
          {{ $message }}
          @enderror
      </p>
    </div>
    <div class="register-form__btn-inner">
     <input class="register-form__back-btn" type="submit" value="戻る" name="back">
     <input class="register-form__send-btn" type="submit" value="登録" name="register">
    </div>


  </form>
 </div>
</div>








@endsection
