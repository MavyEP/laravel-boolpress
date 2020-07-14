@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <div class="col-md-12 text-center">
          <h1>Welcome to our site Mr Guest</h1>
        </div>
        <div class="posts text-center">
          <ul class="mt-5 list-group">
            @foreach ($posts as $post)
              <li class="list-group-item"><a class="badge badge-primary p-2" href="{{route('posts.show' , ['slug'=>$post ->slug])}}">{{ $post->title}}</a></li>
            @endforeach
          </ul>
        </div>
    </div>
</div>
@endsection
