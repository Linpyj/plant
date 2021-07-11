@extends('layouts.app')

@section('content')
<div class="container is-max-widescreen" style="width: 70%;">
  <form-component />
  <login-form />
  {{ Auth::user() }}

     
</div>



@endsection