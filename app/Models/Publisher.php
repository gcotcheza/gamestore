<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Publisher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'keyname',
    ];

    /**
     * Return all the games that belongs to this publisher.
     */
    public function games(): HasMany
    {
        return $this->hasMany(Game::class);
    }
}
