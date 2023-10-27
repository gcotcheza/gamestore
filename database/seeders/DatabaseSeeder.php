<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ModesTableSeeder::class);
        $this->call(DevelopersTableSeeder::class);
        $this->call(PublishersTableSeeder::class);
        $this->call(PlatformsTableSeeder::class);
        $this->call(GenresTableSeeder::class);
    }
}
