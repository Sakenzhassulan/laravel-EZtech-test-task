<?php

namespace App\DTO;

class BookJsonDTO
{

    /**
     * Респонс от первого книжного сервиса
     *
     * @var mixed
     */
    public array $responseService1;

    /**
     * Респонс от второго книжного сервиса
     *
     * @var mixed
     */
    public array $responseService2;

    public function __construct($data)
    {
        $this->responseService1 = $data['book_service_1_response'];
        $this->responseService2 = $data['book_service_2_response'];
    }
}
