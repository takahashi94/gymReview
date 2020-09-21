<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'name'    => 'required',
            'place'   => 'required',
            'article' => 'required',
            'like'    => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => '店舗名を入力してください',
            'place.required'   => '都道府県を入力してください',
            'article.required' => 'レビューを入力してください',
        ];
    }
}
