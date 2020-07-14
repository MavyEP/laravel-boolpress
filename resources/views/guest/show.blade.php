@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <div class="col-md-12 text-center">
          <h1>{{ $post->title }}</h1>
          <p class="list-group-item mt-5">{{ $post->content }}</p>
        </div>
        <div class="col-md-12 text-right">
            <a class="btn btn-primary" href="{{route('posts.index')}}">Return</a>
        </div>
    </div>
</div>
@endsection
