<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUser extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'min:3',
                'max:100'
            ],
            'email' => [
                'required',
                'email'
            ],
            'phone' => [
                'required',
                'numeric'
            ],
            'address' => [
                'required',
                'min:3',
                'max:250'
            ],
            'neighborhood' => [
                'required',
                'min:3',
                'max:250'
            ]
        ];
    }
}