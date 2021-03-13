<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createproduct extends FormRequest
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
  'productimage'=>'required|image',
            'productname'=>'required',
            'productcatagory'=>'required',
            'productsubcatagory'=>'required',
            'productprice'=>'required',
            'productdiscription'=>'required',
        ];
    }
}
