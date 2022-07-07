<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerValidationRequest extends FormRequest
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
        if($this->method() == 'PUT'){
            $rules = [
                'name' => 'required',
                'email' => 'required',
                'status' => 'required'
            ];
        }else{
            $rules = [
                'name' => 'required',
                'email' => 'required',
                'image'  => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'password' => 'min:6|required',
                'password_confirmation' => 'required_with:password|same:password|min:6',
            ];
        }

        return $rules;
    }
}
