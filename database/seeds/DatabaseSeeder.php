<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(BlogTableSeeder::class);
        Model::unguard();
        App\Blog::truncate();

        factory(App\Blog::class, 20)->create();
    }
}