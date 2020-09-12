<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'description', 'date', 'user_id'
    ];

    protected $hidden = ['pivot'];

    public function violences()
    {
        return $this->belongsToMany('App\Violence');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
