<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Appointment extends Model
{
    use HasFactory;

    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'date',
        'doctor',
        'number',
        'message',
        'status',
        'user_id'
    ];
}
