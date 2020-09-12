<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateViolence extends FormRequest
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
            'description' => [
                'required',
                'min:3',
                'max:1500'
            ],
            'media_link' => [
                'max:200'
            ]
        ];
    }
}