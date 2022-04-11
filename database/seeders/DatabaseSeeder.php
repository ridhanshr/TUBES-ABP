<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\

        User::create([
            'name' => 'Muhammad Ridha Anshari',
            'username' => 'ridhanshr',
            'email' => 'ridhanshr@gmail.com',
            'password' => bcrypt('12345'),
            'is_admin' => 1
        ]);

        User::create([
            'name' => 'Maulana Malik Ibrahim',
            'username' => 'maulanamaul',
            'email' => 'maulana@gmail.com',
            'password' => bcrypt('12345'),
            'is_admin' => 1
        ]);

        User::create([
            'name' => 'Arinta Maharani',
            'username' => 'arinta',
            'email' => 'arinta@gmail.com',
            'password' => bcrypt('12345'),
            'is_admin' => 0
        ]);

        User::create([
            'name' => 'Syifa Fauziah',
            'username' => 'syifa',
            'email' => 'syifa@gmail.com',
            'password' => bcrypt('12345'),
            'is_admin' => 0
        ]);
        
        Category::create([
            'name' => 'Tour',
            'slug' => 'tour'
        ]);
        
        Category::create([
            'name' => 'Hotel',
            'slug' => 'hotel'
        ]);

        Post::factory(20)->create();
    }
}
