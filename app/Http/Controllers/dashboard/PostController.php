<?php

namespace App\Http\Controllers\dashboard;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostPost;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //SELECT * FROM posts;
        //$posts = Post::orderBy('created_at', 'desc')->get();
        $posts = Post::orderBy('created_at', 'desc')->paginate(1);
        //echo "Controlador creado con la bandera -r";
        return view("dashboard.post.index", ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("dashboard.post.create", ['post' => new Post()]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostPost $request)
    {
        /*
        $request->validate([
            'title' => 'required|min:5|max:500',
            //'url_clean' => 'required|min:5|max:500''
            'content' => 'required|min:5'
        ]);   
        */ //Estas reglas las movemos a 'Requests/StorePostPost.php
        echo 'Title: ' . $request->input('title');
        //echo 'Title: ' . $request->title;
        
        //dd($request);
        //dd($request->all());
        

        //Si utilizamos la siguiente forma, podríamos quitar 'use Illuminate\Http\Request;'
        //echo 'Title: ' . request("title")

        Post::create($request->validated());

        return back()->with('status', 'Post creado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
                        //show($id)
        //$post = Post::findOrFail($id);

        return view('dashboard.post.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.post.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostPost $request, Post $post)
    {
        $post->update($request->validated());

        return back()->with('status', 'Post actualizado con exito');
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
}
