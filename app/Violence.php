<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Report;

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

  
    public function getViolencesAndNumberOffReports($userId)
    {

        $reports = Report::select('reports.id', 'users.name')
                            ->join('users', 'users.id', '=', 'reports.user_id')
                            ->where('users.id', 2)
                            ->count();

        



        return $reports;
    }
}
