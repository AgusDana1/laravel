<?php

namespace App\Shop\Carousels\Exceptions;

use Exception;

class CarouselNotFoundException extends Exception
{
    public function __construct(string $message = "Carousel not found.", int $code = 404, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
