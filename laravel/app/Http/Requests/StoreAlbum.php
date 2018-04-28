<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlbum extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'year' => 'required|numeric',
            'code' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Необходимо заполнить название альбома',
            'year.required' => 'Необходимо указать год выхода',
            'year.numeric' => 'Введите корректный год',
            'code.required' => 'Ссылка на Яндекс музыку обязательно'
        ];
    }
}
