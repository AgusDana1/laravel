<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model
{
    use HasFactory;
    /**
     * fillable
     * 
     * @var array
     */

    //  Function membuat CRUD/ Mass Assignment
     protected $fillable = [
        'image',
        'title',
        'content',
     ];

    //  Accessor digunakan untuk melakukan manipulasi data/ enkripsi ke dalam database
     /**
      * image
      *
      *@return Attribute
      */

      public function image(): Attribute
      {
        return Attribute::make (
            get: fn ($image) => url('/storage/posts/' . $image),
        );
      }
}
