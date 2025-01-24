<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;
    protected $table = 'event';

    protected $fillable = [
        'created_at',
        'updated_at',
        'title',
        'destination',
        'ev_date',
        'centre_fk',
    ];

    public function transfer(): HasMany
    {
        return $this->hasMany(Transfer::class);
    }

    public function centre(): BelongsTo
    {
        return $this->belongsTo(Centre::class, 'centre_fk', 'identifier');
    }
}
