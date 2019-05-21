<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Haalt records op voor index pagina
        $post = Post::first();
        $posts = Post::all();

        return view('index')->with('post', $post)->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validates the request
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);
        // Handle File Upload
        if($request->hasFile('image')){
            // Get file
            $image = $request->file('image');
            // Get filename with the extension
            $name = $request->file('image')->getClientOriginalName();
            // Set destination path
            $destinationPath = public_path('images/uploads/posts');
            // Image path
            $imagePath = $destinationPath . "/" . $name;
            // Move image to destination path
            $image->move($destinationPath, $name);
            // Url for webserver
            $path = 'images/uploads/posts/' . $name;

        } else {
            $name = 'no-image.jpg';
        }

        // Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->image = $name;
        $post->save();

        return redirect('/user/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // Custom functions

    /**
     * Display the specified resource by user_id.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function showById($id)
    // {
    //     $posts = Post::all()->where('user_id',Auth::id());

    //     $test = "Hello world";
    //     return view('home')->with('posts', $posts)->with('test', $test);               
    // }
}
