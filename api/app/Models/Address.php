<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Address extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'contact_id',
        'title',
        'city',
        'district',
    ];

    public function getContact(){
        return $this->belongsTo(Contact::class);
    }
}
