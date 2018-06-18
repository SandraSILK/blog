<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class Post extends FormRequest
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
            'text'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Podanie tytułu wpisu jest wymagane.',
            'text.required'  => 'Podanie treści wpisu jest wymagane.',
        ];
    }
}
