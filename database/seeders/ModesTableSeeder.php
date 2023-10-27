<?php

namespace Database\Seeders;

use App\Models\Mode;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ModesTableSeeder extends Seeder
{
    protected $modes = [
        'Single-Player',
        'Multiplayer',
        'Cooperative',
        'Racing',
        'Sports',
        'Strategy',
        'Role-Playing Games',
        'Simulation',
        'Puzzle',
        'Party Games',
        'Virtual Reality',
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->modes as $mode) {
            Mode::updateOrCreate([
                'name'    => $mode,
                'keyname' => Str::slug($mode),
            ]);
        }
    }
}
