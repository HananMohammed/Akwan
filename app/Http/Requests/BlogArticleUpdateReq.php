<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogArticleUpdateReq extends FormRequest
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
     $id=  $this->route('dblogarticle');
        return [
            'category_id'=>'required' ,
            'article_en'=>'string|unique:blog_articles,article_en,'.$id,
            'article_ar'=>'string|unique:blog_articles,article_ar,'.$id,
//             'images.*'=>'mimes:jpeg,jpg,png,gif,svg|max:10000',
        ];
    }
}
