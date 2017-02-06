<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProducts extends FormRequest
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
            'name' => 'required|max:100|regex:/^[\pL\s\-]+$/u',
            'price' => 'required|numeric|between:0,99',
            'sale_price' => 'numeric|between:0,99',
            'description' => 'required|max:300|regex:/^[\pL\s\-]+$/u',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:10240',
        ];
    }
}
