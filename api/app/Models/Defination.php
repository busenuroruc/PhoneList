<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Defination extends Model
{
    use HasFactory,Notifiable;

    protected $fillable = [
        'defination_id',
        'type',
        'name',
    ];
}
