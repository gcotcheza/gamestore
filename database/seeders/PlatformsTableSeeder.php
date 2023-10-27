<?php

namespace Database\Seeders;

use App\Models\Platform;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PlatformsTableSeeder extends Seeder
{
    protected $platforms = [
        'windows',
        'Mac OS X',
        'Playstation 3',
        'Personal Computer',
        'iphone',
        'Android',
        'Xbox One',
        'Nintendo Switch',
        'Linux',
        'iPad',
        'Xbox 360',
        'DOS',
        'Commodore 64',
        'DS',
        'NES',
        '3DS',
        'Wii U',
        'GameCube',
        'PlayStation 5',
        'Wii',
        'PlayStation 4',
        '3DS',
        'PlayStation Vita',
        'Amstrad CPC',
        'Nintendo 64',
        'SNES',
        'Gameboy Advance',
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        foreach ($this->platforms as $platform) {
            Platform::updateOrCreate([
                'name'    => $platform,
                'keyname' => Str::slug($platform),
            ]);
        }
    }
}
