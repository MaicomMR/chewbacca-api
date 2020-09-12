<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReport extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'description' => [
                'required',
                'min:1',
                'max:1500'
            ],
            'date' => [
                'required',
                'date'
            ],
            'user_id' => [
                'required',
                'exists:users,id'
            ]
        ];
    }
}