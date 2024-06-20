<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(4)->create();


        User::create([
            'name' => ' MANDEGAR',
            'username' => 'mandegar',
            'email' => 'lazdi@gmail.com',
            'password' => bcrypt('1234567890')
        ]);
        User::create([
            'name' => 'LAZUARDI ',
            'username' => 'lazuardi',
            'email' => 'mixu@gmail.com',
            'password' => bcrypt('1234567890')
        ]);

         Category::create([
             'name' => 'Cyber Amikom Surakarta',
             'slug' => 'cyber-amikom-surakarta'
            
         ]);

         Category::create([
            'name' => 'Cyber scurity',
            'slug' => 'cyber-scurity'
           
        ]);

         Category::create([
             'name' => 'Personal',
             'slug' => 'personal'
            
         ]);

         Post::factory(20)->create();


        

    }
}
