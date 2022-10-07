<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(3)->create();

        // Listing::create([
        //     'title' => 'Laravel Senior developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Arka',
        //     'location' => 'NOvi SAd',
        //     'email' => 'arka@gmail.com',
        //     'website' => 'arka.com',
        //     'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt delectus animi totam,
        //      labore nobis minima vitae quisquam! Vero, dolorum iure!'
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Medior developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Arka',
        //     'location' => 'NOvi SAd',
        //     'email' => 'arka@gmail.com',
        //     'website' => 'arka.com',
        //     'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt delectus animi totam,
        //      labore nobis minima vitae quisquam! Vero, dolorum iure!'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
