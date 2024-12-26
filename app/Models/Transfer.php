<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    /** @use HasFactory<\Database\Factories\TransferFactory> */
    use HasFactory;
    protected $fillable = [
        'created_at',
        'updated_at',
        'event_id',
        'centre_fk',
        'start',
        'via',
        'destination',
        'email',
        'name',
        'message',
        'mode'
    ];
}
