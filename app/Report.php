<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Report;

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

    public function getAllReportsByUser($userId)
    {
        $reports =  DB::select("SELECT distinct reports.description , reports.date, reports.id
                                FROM violences
                                JOIN report_violence ON report_violence.violence_id = violences.id
                                JOIN reports ON report_violence.report_id = reports.id 
                                WHERE reports.user_id=$userId
                                GROUP BY reports.description, reports.date, reports.id
                                ORDER BY reports.description DESC");


        foreach ($reports as $report) {
            $violences = DB::select("SELECT violences.name
                                    FROM violences
                                    JOIN report_violence ON report_violence.violence_id = violences.id
                                    JOIN reports ON report_violence.report_id = reports.id 
                                    WHERE reports.id=$report->id
                                    GROUP BY violences.name");

            $report->violences = $violences;
        }
        return $reports;
    }

    public function numberAllReports() 
    {
        return $this->count('id');
    }

}