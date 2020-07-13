@extends('layouts.adminapp')

@section('content')

  <div class="container">
      <h1>Update post number : {{$post->id}}:</h1>
      <div class="mt-5">
      <form action="{{ route('admin.posts.update' , ['post' => $post->id])}}" method="post">
        @csrf
        @method('PUT')
           <div class="form-group">
             <label for="title">Change Title</label>
             <input type="text" name="title" placeholder="Post title..." class="form-control" id="title" value="{{ old('title')}}">
           </div>
           <div class="form-group">
             <label for="content">Change Content</label>
             <textarea type="text" name="content" placeholder="Content..." class="form-control" id="content" value="{{ old('content')}}"></textarea>
           </div>
           <button type="submit" class="btn btn-primary">Edit</button>
            <a class="btn btn-primary" href="{{route('admin.posts.index')}}">Return</a>
       </form>
    </div>
  </div>

@endsection
