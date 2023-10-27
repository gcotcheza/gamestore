<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'keyname',
    ];

    /**
     * Return the games associated to this genres.
     */
    public function games(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }
}
