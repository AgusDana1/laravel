<?php 

namespace App\Shop\Carousels\Exceptions;

use Exception;

class CreateCarouselErrorException extends Exception
{
    /**
     * CreateCarouselErrorException constructor.
     *
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}