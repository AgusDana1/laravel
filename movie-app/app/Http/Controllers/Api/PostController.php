<?php

namespace App\Http\Controllers\Api;

// import Model App
use App\Models\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// import Resources "Post Resources"
use App\Http\Resources\PostResource;

// import Facades "Validator"
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * index
     * 
     * @return void
     */

     public function index()
     {
        // get all post
        $posts = Post::latest()->paginate(5);

        // return collections of posts as a resources
        return new PostResource(true, 'List Data Post Update!', $posts);
     }

    /**
     * store
     * 
     * @param mixed $request
     * @return void
     */

     public function store(Request $request)
     {
         //define validation rules
         $validator = Validator::make($request->all(), [
             'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'title'     => 'required',
             'content'   => 'required',
         ]);
 
         //check if validation fails
         if ($validator->fails()) {
             return response()->json($validator->errors(), 422);
         }
 
         //upload image
         $image = $request->file('image');
         $image->storeAs('public/posts', $image->hashName());
 
         //create post
         $post = Post::create([
             'image'     => $image->hashName(),
             'title'     => $request->title,
             'content'   => $request->content,
         ]);
 
         //return response
         return new PostResource(true, 'Data Post Berhasil Ditambahkan!', $post);
     }
}
