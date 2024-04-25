<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkRecord extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'time_record',
        'status',
        'total_minutes',
        'last_time_record',
    ];

    protected function casts()
    {
        return [
            'time_record' => 'datetime',
        ];
    }
}
