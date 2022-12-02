<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Images extends FormRequest
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
            'images'   => 'required|array|max:5',
            'images.*' => 'mimes:jpg,jpeg,png',
        ];
    }
    public function messages()
    {
        return [
            'images.required' => 'Должен быть загружен хотя бы один файл. Но не более 5',
            'images.max' => 'Изображений может быть не более 5',
            'images.*' => 'Доступные форматы для загрузки - jpg,jpeg,png'
        ];
    }
}
