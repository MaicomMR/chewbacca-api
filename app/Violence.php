<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Report;
use App\ReportViolence;

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
        $reports = DB::select("SELECT violences.name, COUNT(*) as total
                            FROM violences 
                            JOIN report_violence ON report_violence.violence_id = violences.id
                            JOIN reports ON report_violence.report_id = reports.id
                            WHERE reports.user_id=$userId
                            GROUP BY violences.name, reports.user_id
                            ORDER BY total DESC");

        return $reports;
    }

    public function getViolencesByUser($violenceId)
    {
        $violences = DB::select("SELECT users.name,COUNT(*) as total
                                FROM violences JOIN report_violence ON report_violence.violence_id = violences.id
                                JOIN reports ON report_violence.report_id = reports.id
                                JOIN users ON reports.user_id = users.id
                                WHERE violences.id=$violenceId
                                GROUP BY users.name, reports.user_id");

        return $violences;                        
    }

    public function getUsersByNeighborhood($userNeighborhood)
    {
        $users = DB::select("SELECT violences.name,COUNT(*) as total
                            FROM violences JOIN report_violence ON report_violence.violence_id = violences.id
                            JOIN reports ON report_violence.report_id = reports.id
                            JOIN users ON reports.user_id = users.id
                            WHERE users.neighborhood='$userNeighborhood'
                            GROUP BY violences.name, reports.user_id 
                            ORDER BY total desc
                            LIMIT 3");

        return $users;                    
    }

    public function violenceMoreRelated()
    {
        $violence = DB::select("SELECT violences.name, COUNT(*) as total
                                FROM violences 
                                JOIN report_violence ON report_violence.violence_id = violences.id
                                JOIN reports ON report_violence.report_id = reports.id
                                WHERE reports.user_id=2
                                GROUP BY violences.name, reports.user_id
                                ORDER BY total DESC LIMIT 1");

        return $violence;                        
    }
}




