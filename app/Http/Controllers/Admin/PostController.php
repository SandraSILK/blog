<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Post as PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderByDesc('created_at')->get();

        return view('admin.posts.index', [
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(PostRequest $request)
    {
        $data = $request->only([
            'title',
            'text',
        ]);

        $data['slug'] = str_slug($request->input('title'));
        $post = Post::create($data);

        if ($request->hasFile('file')) {
            $this->addFile($request, $post);
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

    public function update(PostRequest $request, Post $post)
    {
        $data = $request->only([
            'title',
            'text',
        ]);
    
        $post->update($data);

        if($request->file('file')) {
            $this->removeFile($post);
            $this->addFile($request, $post);
        }

        return redirect()
            ->route('admin.posts.index')
            ->withFlash(sprintf('Pomyślnie zapisano zmiany %s', $request->input('title')));
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()
            ->route('admin.posts.index')
            ->withFlash(sprintf('Pomyślnie usunięto wpis %s', $post->title));
    }

    public function addFile($request, $post)
    {
        $file = $request->file('file');
            $name = $file->hashName();

            Storage::putFileAs('public/posts', $file, $name);
            $post->update([
                'file' => sprintf('public/posts/%s', $name),
            ]);
    }

    public function removeFile($post)
    {
        Storage::delete($post->file);
    }
}
