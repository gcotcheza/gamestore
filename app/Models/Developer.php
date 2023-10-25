<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Developer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'keyname',
    ];

    /**
     * Returns the games that belongs to this developer.
     */
    public function games(): BelongsToMany
    {
        return $this->belongsToMany(Games::class);
    }
}
