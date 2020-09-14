<?php

namespace App;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\DB;


class User extends Authenticatable implements JWTSubject
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'address', 'neighborhood'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function reports()
    {
        return $this->hasMany('App\Report');
    }

     /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function scopeNeighborhood($query, $neighborhood)
    {
        if (!$neighborhood){
            return $neighborhood;
        }
        return $query->where('neighborhood', $neighborhood);
    }

    public function scopeName($query, $name)
    {
        if (!$name){
            return $query;
        }
        return $query->where('name', $name);
    }

    public function getTotalReports($userId)
    {
        return $this->join('reports', 'users.id', '=', 'reports.user_id')
                    ->where('users.id', $userId)
                    ->count();
    }

    public function userWithMoreReports()
    {
        $user = DB::select("SELECT users.name
                            FROM users
                            JOIN reports ON users.id = reports.user_id
                            GROUP BY users.name ASC LIMIT 1");
              
        return $user;                    
    }

    public function neighborhoodWithMoreReports()
    {
        $neighborhood = DB::select("SELECT users.neighborhood, COUNT(reports.id) as total
                                    FROM users
                                    JOIN reports ON users.id = reports.user_id
                                    GROUP BY users.neighborhood
                                    ORDER BY total DESC LIMIT 1");
        
        return $neighborhood;
    }

    public function top5UsersWithMoreReports()
    {
        $users = DB::select("SELECT users.name, users.neighborhood, COUNT(reports.id) as reports
                            FROM reports 
                            JOIN report_violence ON report_violence.report_id = reports.id
                            JOIN users ON reports.user_id = users.id
                            GROUP BY users.name, users.neighborhood
                            ORDER BY reports DESC LIMIT 5");

         return $users;                   
    }
}
