<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    // Properti yang akan digunakan
    public $status;  
    public $message;  
    public $resource; // data akan disimpan disini

    /**
     * __construct
     * 
     * @param mixed $status
     * @param mixed $message
     * @param mixed $resource;
     * @return void
     */

    //  membuat API resource
    public function __construct($status, $message, $resource) 
    {
        parent::__construct($resource);
        $this->status = $status;
        $this->message = $message;
    }

    /**
     * Transform the resources
     * 
     * @param \Illiuminate\Http\Request $request
     * @return array
     */

    //  menempatkan hasil request ke array
     public function toArray($request)
     {
        return [
            'success' => $this->status,
            'message' => $this->message,
            'data' => $this->resource
        ];
     }
}
