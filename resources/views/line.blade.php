@extends('layouts.app')

@section('content')
<div class="container is-max-widescreen" style="width: 70%;">
  
  <div class="bio-wrapper">
    <div class="img_wrapper" style="display:flex;">
      <div style="background-image: url('https://i.ytimg.com/vi/FdkGy53wVZY/maxresdefault.jpg');
        width:  100px;
        height:  100px;
        border-radius: 50%;
        background-position: center;
        ">
      </div>
      <div style="max-width: 80%;">
        <p class="subtitle ml-5"><strong>トムさん</strong></p>
        <p class="ml-5">
          ネコでして、ジェリーというネズミとよく遊んでいます。
          ネコでして、ジェリーというネズミとよく遊んでいます。
          ネコでして、ジェリーというネズミとよく遊んでいます。
        </p>
      </div>
    </div>
    <div class="number_wrapper mt-5 mb-5" style="display:flex;">
      <p class="mr-3"><strong>フォロー</strong></p>
      <p class="mr-3">1000</p>
      <p class="mr-3"><strong>フォロワー</strong></p>
      <p class="mr-3">2000</p>
    </div>
  </div>

  <div class="tabs is-medium">
    <ul>
      <li><a>自分の写真</a></li>
      <li><a>お気に入り写真</a></li>
      <li class="is-active"><a>フォロー</a></li>
      <li><a>フォロワー</a></li>
    </ul>
  </div>
<form-component />

     
</div>



@endsection