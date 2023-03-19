<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:128',
            'thumb' => 'nullable',
            'description' => 'nullable',
            'price' => 'required|numeric|min:0',
            'series' => 'required|max:64',
            'sale_date' => 'required|date',
            'type' => 'required|max:64',
        ];
    }

    public function messages()
    {
        return [
            // 
        ];
    }
}
