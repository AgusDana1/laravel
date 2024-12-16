<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    // define properti
    public $status;
    public $message;
    public $resource;

    /**
     * __construct
     * 
     * @param mixed $status
     * @param mixed $message
     * @param mixed $resources
     * @return void
     */

     public function __construct($status, $message, $resource)
     {
        parent::__construct($resource);
        $this->status = $status;
        $this->message = $message;
     }

     /**
      * Rubah resource ke Array
      *
      * @param \Illuminate\Http\Request $request
      * @return array
      */

    // Membuat function toArray
    public function toArray($request)
    {
        return  [
            'success' => $this->status,
            'message' => $this->message,
            'data' => $this->resource
        ];
    }
}
