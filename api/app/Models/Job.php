<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Job extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'empolyer_id',
        'job_taker_id',
        'defination_id',
        'description',
        'completed',
    ];
}
