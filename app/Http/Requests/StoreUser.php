<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'password' => [
                'required',
                'min:8'
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