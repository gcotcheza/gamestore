<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DevelopersTableSeeder extends Seeder
{
    protected $developers = [
        'Naughty Dog',
        'Rockstar North',
        'Nintendo',
        'Nintendo Entertainment Analysis & Development',
        'Nintendo Entertainment Planning & Development',
        'CD Projekt Red',
        'Insomniac Games',
        'FromSoftware',
        'BioWare',
        'Valve Corporation',
        'Square Enix',
        'Ubisoft',
        'Capcom',
        'Blizzard Entertainment',
        'Mojang Studios',
        'Supergiant Games',
        'Bungie',
        'Obsidian Entertainment',
        'Gearbox Software',
        'Rare',
        'PlatinumGames',
        'id Software',
        'Rocksteady Studios',
        '343 Industries',
        'Guerrilla Games',
        'Treyarch',
        'Respawn Entertainment',
        'Crystal Dynamics',
        'Arkane Studios',
        'Firaxis Games',
        'Harmonix',
        'Sucker Punch Productions',
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->developers as $developer) {
            Developer::updateOrCreate([
                'name'    => $developer,
                'keyname' => Str::slug($developer),
            ]);
        }
    }
}
