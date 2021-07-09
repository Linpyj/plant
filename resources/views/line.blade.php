@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="mb-5" style="border: 1px solid black;">
              <div class="bio_wrapper">
                <p>こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。
                こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。
                こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。
                こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。
                こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。
                こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。
                こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。
                </p>
              </div>
              <div style="display: flex;">
                <div 
                  class="number_wrapper"
                  style="display:flex;
                          width: 1500px;
                          align-items: flex-end;
                          "
                >
                  <div>
                    <h5 class="ml-2">投稿</h5>
                    <h5 class="ml-2">100</h5>
                  </div>
                  <div>
                    <h5 class="ml-5">フォロー</h5>
                    <h5 class="ml-5">1200</h5>
                  </div>
                  <div>
                    <h5 class="ml-5">フォロワー</h5>
                    <h5 class="ml-5">1000000</h5>
                  </div>
                  <div>
                    <h5 class="ml-5">お気に入り</h5>
                    <h5 class="ml-5">200</h5>
                  </div>
                </div>
                <div class="bio_image" 
                  style="text-align: right;
                  margin-right: 80px; display: flex;">
                  <img class='product_listing_img img-responsive' src="{{ asset('/assets/images/hiko.jpeg') }}" 
                    style="max-width: 50%;
                    ">
                </div>
              </div>
            </div>
            <div class="card-body">
              
              <div class="row">
                
                <div class="col-md-6">  
                  <h3>フォロー中</h3>
                  <div class="card-columns">
                    <div class="card">
                        <img class='product_listing_img img-responsive' src="{{ asset('/assets/images/0819133200_5f3cab40c3500.jpeg') }}" style="max-width: 250%;">
                    </div>
                  </div>
                  <div class="card-columns">
                    <div class="card">
                        <img class='product_listing_img img-responsive' src="{{ asset('/assets/images/0819133200_5f3cab40c3500.jpeg') }}" style="max-width: 250%;">
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <h3>おすすめの投稿</h3>
                  <div class="card-columns">
                    <div class="card">
                        <img class='product_listing_img img-responsive' src="{{ asset('/assets/images/0819133200_5f3cab40c3500.jpeg') }}" style="max-width: 250%;">
                    </div>
                  </div>
                  <div class="card-columns">
                    <div class="card">
                        <img class='product_listing_img img-responsive' src="{{ asset('/assets/images/0819133200_5f3cab40c3500.jpeg') }}" style="max-width: 250%;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
</div>

@endsection