<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts =  Post::all();
        return view('admin.posts.index' , compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $dati = $request->all();
        $slug = Str::of($dati['title'])->slug('-')->__toString();
        $dati['slug'] = $slug;
        $new_post = new Post();
        $new_post->fill($dati);
        $new_post->save();
        return redirect()->route('admin.posts.index');

    }

    public function show($id)
    {
        $post = Post::find($id);
        if ($post) {
          return view('admin.posts.show' , compact('post'));
        } else {
          return abort('404');
        }
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        if ($post) {
          $post->delete();
          return redirect()->route('admin.posts.index');
        } else {
          return abort('404');
        }
    }
}
