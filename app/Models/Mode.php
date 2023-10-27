<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Mode extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'keyname',
    ];

    /**
     * Return the games associated with this game mode.
     */
    public function games(): BelongsToMany
    {
        return $this->belongsToMany(Games::class);
    }
}
