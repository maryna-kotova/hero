<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'demo',
            'email' => 'demo@i.ua',
            'password' => Hash::make('demo'),
            ]);
      
        DB::table('superheroes')->insert([
            'nickname' => 'Superman',
            'real_name' => 'Clark Kent',
            'origin_description' => 'He was born Kal-El on the planet Krypton, before being rocketed to
            Earth as an infant by his scientist father Jor-El, moments before Kryptons destruction',
            'superpowers' => 'Solar energy absorption and healing factor, solar flare and heat vision,
            solar invulnerability, flight',
            'catch_phrase' => 'Look, up in the sky, it is a bird, it is a plane, it is Superman!',            
        ]);
        // \App\Models\User::factory(10)->create();
        \App\Models\Superhero::factory(37)->create();
    }
}
