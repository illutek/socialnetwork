<?php

namespace App\Http\Controllers;

use App\Post;
use Image;
use Illuminate\Http\Request;
use Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'decs')->get();
        return view('front.index', compact('posts'));
    }

    public function userPosts($user_id)
    {

        return view('front.index')
            ->with('posts', Post::where('user_id', $user_id)->orderBy('id', 'decs')->get());
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->fill($request->only('body'));

        if ($request->hasFile('post_image')) {
            $image_path = 'img/post/';
            $image = $request->file('post_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path($image_path . $filename);


            Image::make($image->getRealPath())
                ->fit(600)
                ->save($path);

            $post->post_image = $image_path . $filename;
        } else {
            $post->post_image = 'none.png';
        }

        $request->user()->posts()->save($post);

        return redirect(route('index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
