<?php

namespace App\Http\Controllers\api;

use App\Post;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends ApiResponseController
{
   
    public function index()
    {
        //$posts = Post::all();
        $posts = Post::
        join('post_images', 'post_images.post_id', '=', 'posts.id')->
        join('categories', 'categories.id', '=', 'posts.category_id')->
        select('posts.*', 'categories.title as category', 'post_images.image')->
        orderBy('posts.created_at', 'desc')->paginate(10);
        //return response()->json($posts, 200);
        return $this->successResponse($posts);
    }

    public function show(Post $post)
    {
        $post->image;
        $post->category;
        //return response()->json($post);
        return $this->successResponse($post);
        //return response()->json(array("data" => $post, "code" => 200, "msj" => ''), 200);
    }

    public function category(Category $category)
    {
        
        //return $this->successResponse($category->post()->paginate(10));

        return $this->successResponse(["posts"=>$category->post()->paginate(10), "category"=>$category]);
    }

}
