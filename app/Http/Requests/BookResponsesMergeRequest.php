<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookResponsesMergeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'book_service_1_response.data.*.name' => 'required|string|max:255',
            'book_service_1_response.data.*.description' => 'required|string',
            'book_service_1_response.data.*.createdAt' => 'required|string',
            'book_service_2_response.*.title' => 'required|string|max:255',
            'book_service_2_response.*.descr' => 'required|string',
            'book_service_2_response.*.author' => 'required|string|max:255',
        ];
    }

}
