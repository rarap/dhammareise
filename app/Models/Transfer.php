<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transfer extends Model
{
    /** @use HasFactory<\Database\Factories\TransferFactory> */
    use HasFactory;
    protected $table = 'transfer';

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

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
}
