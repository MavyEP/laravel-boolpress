@extends('layouts.adminapp')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12 d-flex justify-content-between align-items-center">
        <h1 class="mt-5 mb-5">Posts objects :</h1>
        <a class="btn btn-primary" href="{{ route('admin.posts.create')}}">Create new post</a>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>SLUG</th>
            <th>ACTIONS</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
            <tr>
              <td>{{ $post->id }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->slug }}</td>
              <td>
                <a class="btn btn-small btn-info" href="#">Details</a>
                <a class="btn btn-small btn-warning" href="#">Edit</a>
                <a class="btn btn-small btn-Danger" href="#">Delete</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
