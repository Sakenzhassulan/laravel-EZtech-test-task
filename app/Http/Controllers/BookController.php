<?php

namespace App\Http\Controllers;

use App\DTO\BookJsonDTO;
use App\Http\Requests\BookResponsesMergeRequest;
use App\Services\BookService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class BookController extends Controller
{

    /**
     * BookController constructor
     *
     * @param BookService $bookService
     */
    public function __construct(private BookService $bookService)
    {

    }

    /**
     * Объединения респонсов двух книжного сервиса
     *
     * @param BookResponsesMergeRequest $request
     *
     * @return JsonResponse
     */
    public function mergeResponses(BookResponsesMergeRequest $request): JsonResponse
    {
        $bookResponseDTO = new BookJsonDTO($request->validated());

        $combinedJsonResponse = $this->bookService->mergeResponses($bookResponseDTO);

        return response()->json($combinedJsonResponse);
    }
}
