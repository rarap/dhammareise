<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Centre extends Model
{
    protected $fillable = [
        'created_at',
        'updated_at',
        'name',
        'identifier',
        'city',
    ];

    public function event(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
