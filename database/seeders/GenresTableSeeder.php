<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    protected $genres = [
        'Action',
        'Adventure',
        'Fighting',
        'Platform',
        'Puzzle',
        'Racing',
        'Role-playing',
        'Shooter',
        'Simulation',
        'Sports',
        'Strategy',
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->genres as $genre) {
            Genre::updateOrCreate([
                'name'    => $genre,
                'keyname' => Str::slug($genre),
            ]);
        }
    }
}
