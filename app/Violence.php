<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Violence extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'media_link'
    ];

    protected $hidden = ['pivot'];

    public function reports()
    {
        return $this->belongsToMany('App\Report');
    }
}
