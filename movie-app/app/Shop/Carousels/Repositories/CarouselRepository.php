<?php 

namespace App\Shop\Carousels\Repositories;

use App\Shop\Carousels\Carousel;
use App\Shop\Carousels\Exceptions\CarouselNotFoundException;
use App\Shop\Carousels\Exceptions\CreateCarouselErrorException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Shop\Carousels\Exceptions;
use Illuminate\Database\QueryException;

class CarouselRepository
{
    /**
     * Model instance
     * 
     * @var Carousel
     */
    protected $model;

    /**
     * CarouselRepository constructor
     * 
     * @param Carousel $carousel
     */

     public function __construct(Carousel $carousel)
     {
        $this->model = $carousel;
     }

    //  membuat carousel error exceptions
     /**
      * @param array $data
      * @return Carousel
      * @throws CreateCarouselErrorException
      */

      public function createCarousel(array $data) : Carousel 
      {
        try {
            return $this->model->create($data);
        }catch (QueryException $e) {
            throw new CreateCarouselErrorException($e);
        }
      }

    //   membuat carousel not found
      /**
       * @param int id
       * @return Carousel
       * @throws CarouselNotFoundException
       */

       public function findCarousel(int $id) : Carousel
       {
        try {
            return $this->model->findOrFail($id);
        }catch (ModelNotFoundException $e) {
            throw new CarouselNotFoundException($e); // tolong perbaiki
        }
       }
}