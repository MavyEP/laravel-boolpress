@extends('layouts.adminapp')

@section('content')

  <div class="container">
      <h1>Insert new Post :</h1>
      <div class="mt-5">
      <form action="{{ route('admin.posts.store')}}" method="post">
        @csrf
           <div class="form-group">
             <label for="title">title</label>
             <input type="text" name="title" placeholder="Post title..." class="form-control" id="title" value="{{ old('title')}}">
           </div>
           <div class="form-group">
             <label for="content">Content</label>
             <textarea type="text" name="content" placeholder="Content..." class="form-control" id="content" value="{{ old('content')}}"></textarea>
           </div>
           <div class="form-group">
             <label for="category">Category</label>
             <select id="category" class="form-control" name="category_id">
               <option value="">Select category</option>
               @foreach ($categories as $category)
                 <option value="{{$category->id}}">{{$category->name}}</option>
               @endforeach
             </select>
           </div>
           <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
  </div>

@endsection
