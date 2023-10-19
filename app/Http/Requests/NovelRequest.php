<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NovelRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'year_published' => 'required',
            'creator' => 'required',
            'genre_id' => 'required',
            'image' => 'image|mimes:jpg,png'
        ];
    }
}
