<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public static function allJobs():array
    {
        return [
            [
                'id' => '1',
                'title' => 'director',
                'salary' => '80000'
            ],
            [
                'id' => '2',
                'title' => 'programmer',
                'salary' => '50000'
            ],
            [
                'id' => '3',
                'title' => 'staff',
                'salary' => '20000'
            ]
        ];
    }

    public static function findJob(int $id):array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if(!$job){
            abort(404);
        }
        return $jobs;
        
    }
}
