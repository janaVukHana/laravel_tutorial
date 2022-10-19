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

        Listing::factory(5)->create();

        // Listing::create([
        //     'id' => '1', 
        //     'title' => 'Listing 1',
        //     'tags' => 'some tags',
        //     'company' => 'Company name',
        //     'location' => 'Novi Sad',
        //     'email' => 'milica@g.com',
        //     'website' => 'milica.com',
        //     'description' => 'Some dummy text bla bla!'
        // ]);

        // Listing::create([
        //     'id' => '2', 
        //     'title' => 'Listing 2',
        //     'tags' => 'some tags',
        //     'company' => 'Company name',
        //     'location' => 'Novi Sad',
        //     'email' => 'ilija@g.com',
        //     'website' => 'ilija.com',
        //     'description' => 'Some dummy text bla bla!'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
