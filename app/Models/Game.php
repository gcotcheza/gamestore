<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'publisher_id',
        'price',
        'released_at',
    ];

    /**
     * Returns the developers for this particular game.
     */
    public function developers(): BelongsToMany
    {
        return $this->belongsToMany(Developer::class);
    }

    /**
     * Return the publisher where this games belongs to.
     */
    public function publisher(): BelongsTo
    {
        return $this->belongsTo(Publisher::class);
    }

    /**
     * Return all the modes for this specific game.
     */
    public function modes(): BelongsToMany
    {
        return $this->belongsToMany(Mode::class);
    }

    /**
     * Return all the platforms where this game belongs to.
     */
    public function platforms(): BelongsToMany
    {
        return $this->belongsToMany(Platform::class);
    }

    /**
     * Return the genres associated to this game.
     */
    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }
}
