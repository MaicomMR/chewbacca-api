<?php

namespace App\Services\Violence;

use Illuminate\Validation\UnauthorizedException;
use Illuminate\Support\Str;
use App\Violence;

class Store
{
    public function handle ($request): Violence
    {
        $violence = Violence::create([
            'name' => request()->name,
            'slug' => Str::slug(request()->name, '-'),
            'description' => request()->description,
            'media_link' => request()->media_link,
        ]);


        return $violence;
    }
}