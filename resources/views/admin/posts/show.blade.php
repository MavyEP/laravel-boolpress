@extends('layouts.adminapp')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12 d-flex justify-content-between align-items-center">
        <h1 class="mt-5 mb-5">Post Infos:</h1>
        <a class="btn btn-primary" href="{{ route('admin.posts.index')}}">Return</a>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>SLUG</th>
            <th>CONTENT</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td>{{ $post->id }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->slug }}</td>
              <td>{{ $post->content }}</td>
              </td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>

@endsection
