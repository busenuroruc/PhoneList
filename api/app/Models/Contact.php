<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ContactModel extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'user_id',
        'type',
        'name',
        'content',
    ];

    public function getAddress(){
        return $this->hasMany(Address::class);
    }
}

