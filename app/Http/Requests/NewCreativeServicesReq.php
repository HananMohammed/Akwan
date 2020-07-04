<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewCreativeServicesReq extends FormRequest
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
            'name_en'=>'required|string',
            'name_ar'=>'required|string',
            'text_en'=>'required|string',
            'text_ar'=>'required|string',
        ];
    }
}
