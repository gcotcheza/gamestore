<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PublishersTableSeeder extends Seeder
{
    protected $publisher = [
        'Tencent Games',
        'Sony Interactive Entertainment',
        'Microsoft',
        'Activision Blizzard',
        'Electronic Arts (EA)',
        'Bandai Namco',
        'Take-Two Interactive',
        'Ubisoft',
        'Square Enix',
        'Konami Games',
        'Sega',
        'Capcom',
        'NetEase',
        'Activision Blizzard',
        'Square Enix',
        'Nexon',
        'Netmarble',
        'Embracer Group',
        'Blizzard Entertainment',
        'Activision',
        'Nintendo',
        'Valve',
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->publisher as $publisher) {
            Publisher::updateOrCreate([
                'name'    => $publisher,
                'keyname' => Str::slug($publisher),
            ]);
        }
    }
}
