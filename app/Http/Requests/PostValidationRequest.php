<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostValidationRequest extends FormRequest
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

    
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'post_img' => 'required',
            'customer_id' => 'required',
        ];
    }
}
