@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <img src="{{ asset('/assets/images/plants8.jpeg') }}" style="max-width: 100%;">
                    <div>
                        <p class="h3 mt-5">人気の投稿</p>
                        <div class="card-columns">
                            <div class="card">
                                <img class='product_listing_img img-responsive' src="{{ asset('/assets/images/0819133200_5f3cab40c3500.jpeg') }}" style="max-width: 100%;">
                            </div>
                            <div class="card">
                                <img class='product_listing_img img-responsive' src="{{ asset('/assets/images/0819133200_5f3cab40c3500.jpeg') }}" style="max-width: 100%;">
                            </div>
                            <div class="card">
                                <img class='product_listing_img img-responsive' src="{{ asset('/assets/images/0819133200_5f3cab40c3500.jpeg') }}" style="max-width: 100%;">
                            </div>
                            <div class="card">
                                <img class='product_listing_img img-responsive' src="{{ asset('/assets/images/0819133200_5f3cab40c3500.jpeg') }}" style="max-width: 100%;">
                            </div>
                            <div class="card">
                                <img class='product_listing_img img-responsive' src="{{ asset('/assets/images/0819133200_5f3cab40c3500.jpeg') }}" style="max-width: 100%;">
                            </div>
                            <div class="card">
                                <img class='product_listing_img img-responsive' src="{{ asset('/assets/images/0819133200_5f3cab40c3500.jpeg') }}" style="max-width: 100%;">
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <a href="{{ route('post.index') }}" class="btn btn-success" type="button">タイムラインを見る</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
