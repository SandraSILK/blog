<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index', [
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->only([
            'title',
            'text',
        ]);

        $data['slug'] = str_slug($request->input('title'));
        $post = Post::create($data);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $name = $file->hashName();

            Storage::putFileAs('public/posts', $file, $name);
            $post->update([
                'file' => sprintf('public/posts/%s', $name),
            ]);
        };

        return redirect()
            ->route('admin.posts.index')
            ->withFlash(sprintf('Pomyślnie dodano wpis %s.', $post->title), 'success');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post,
        ]);
    }

    public function update()
    {
        dd('zapisz');
    }
}
