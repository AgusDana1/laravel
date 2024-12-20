<?php

namespace App\Http\Controllers\Api;

// Import post models
use App\Models\Post;

// Import Resource "Post Resource"
use App\Http\Resources\PostResource;

// Import Facades "Storage"
use Illuminate\Support\Facades\Storage;

// Import Facade "Validator"
use Illuminate\Support\Facades\Validator;

// Import Controller
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Membuat sistem CRUD
class PostController extends Controller
{
    // menyiapkan data & table
    /**
     * index
     * 
     * @return void
     */

     public function index() 
     {
        // Mengambil semua request post
        $posts = Post::latest()->paginate(5);

        // return collection
        return new PostResource(true, 'List Data Post', $posts);
     }

     /**
      * store/ uplaod data
      *
      *
      *@param mixed $request
      *@return void
      */

    //  function store dibuat
    public function store(Request $request)
    {
        // definisikan validation rule
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'content' => 'required',
        ]);

        // check if validation jika terjadi error
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        // buat post
        $post = Post::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // return response
        return new PostResource(true, 'Data Post Berhasil Diupload', $post);
    }

    /**
     * show/menampilkan data berdasarkan pencarian id
     * 
     * @param mixed $post
     * @return void
     */

    //  get post from params id
     public function show($id)
     {
        // find post by id
        $post = Post::find($id);

        // return single post as a resource
        return new PostResource(true, 'Detail Data dari Post!', $post);
     }

    //  Update data
     /**
      * update data
      *
      *@param mixed $request
      *@param mixed $post
      *@return void
      */

      public function update(Request $request, $id)
      {
        // definisikan validation rule
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
        ]);

        // konfigurasikan jika ada validation failed
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422); // diberikan return error 422
        }

        // Cari post berdasarkan id
        $post = Post::find($id);

        // Check if image diperbarui/tidak
        if ($request->hasFile('image')) {
            // upload image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            // delete foto lama
            Storage::delete('public/posts/'.basename($post->image));

            // update image baru
            $post->update([
                'image' => $image->hashName(),
                'title' => $request->title,
                'content' => $request->content,
            ]);
        } else {
            // update post tanpa menggunakan image
            $post->update([
                'title' => $request->title,
                'content' => $request->content,
            ]);
        }

        // return response
        return new PostResource(true, 'Data Post Berhasil Diupdate', $post);
    }

    /**
     * destroy/hapus 
     * 
     * @param mixed $post
     * @return void
     */

     public function destroy($id)
     {
        // find post by id
        $post = Post::find($id);

        // Delete image
        Storage::delete('public/posts/'.basename($post->image));

        // delete post
        $post->delete();

        // return 
        return new PostResource(true, 'Data Post berhasil dihapus!', null);
     }
}
