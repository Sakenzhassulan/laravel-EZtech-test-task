<?php

namespace App\Services;

use App\DTO\BookJsonDTO;

class BookService
{

    /**
     * Объединения респонсов двух книжного сервиса
     *
     * @param BookJsonDTO $bookResponseDTO DTO ответов
     *
     * @return array
     */
    public function mergeResponses(BookJsonDTO $bookResponseDTO): array
    {
        return array_merge(
            $bookResponseDTO->responseService1['data'],
            $bookResponseDTO->responseService2
        );
    }
}
