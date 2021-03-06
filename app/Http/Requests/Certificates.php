<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Validator;
use Illuminate\Validation\ValidationException;

class Certificates extends FormRequest
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
            //
            'about_certificates_en'=>'required|string',
            'about_certificates_ar'=>'required|string',
            'alt_certificates_1'=>'required|string',
            'alt_certificates_2'=>'required|string',
            'certificates_1'=>'mimes:jpeg,jpg,png,gif,svg|required|max:10000',
            'certificates_2'=>'mimes:jpeg,jpg,png,gif,svg|required|max:10000',

        ];
    }
//protected  function  failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
//{
//   $errors =(new ValidationException($validator))->errors();
// throw ;
//return redirect()->back()->with($errors);    //parent::failedValidation($validator); // TODO: Change the autogenerated stub
//    }
}
