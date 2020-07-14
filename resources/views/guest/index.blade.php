@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <div class="col-md-12 text-center">
          <h1>Welcome to our site Mr Guest</h1>
        </div>
        <div class="posts text-center">
          <ul>
            @foreach ($posts as $post)
              <li><a href="{{route('posts.show' , ['slug'=>$post ->slug])}}">{{ $post->title}}</a></li>
            @endforeach
          </ul>
        </div>
    </div>
</div>
@endsection
