<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Platform extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'keyname',
    ];

    /**
     * Return all the games that belongs to this platform.
     */
    public function games(): BelongsToMany
    {
        return $this->belongsToMany(Games::class);
    }
}
