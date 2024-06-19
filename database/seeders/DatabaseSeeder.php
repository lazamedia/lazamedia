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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'LAZUARDI MANDEGAR',
            'username' => 'lazuardimxt',
            'email' => 'lazdi123@gmail.com',
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

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judulpertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus?',
        //     'body' => '<p>Lorem ipsum dolor sit ametLorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minusLorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minusLorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus Lorem ipsum dolor sit amet.</p><p>Lorem ipsum dolor sit ametLorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minusLorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minusLorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus Lorem ipsum dolor sit amet.</p><p>Lorem ipsum dolor sit ametLorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minusLorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minusLorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus Lorem ipsum dolor sit amet.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judulkedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus?',
        //     'body' => '<p>Lorem ipsum dolor sit ametLorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minusLorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minusLorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus Lorem ipsum dolor sit amet.</p><p>Lorem ipsum dolor sit ametLorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minusLorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minusLorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus Lorem ipsum dolor sit amet.</p><p>Lorem ipsum dolor sit ametLorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minusLorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minusLorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, minus Lorem ipsum dolor sit amet.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        

    }
}
