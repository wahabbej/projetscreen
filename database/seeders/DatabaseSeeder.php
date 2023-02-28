<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\UrlScreen;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        UrlScreen::create([
            "url"=>"google.com.png",
            "name"=>"Google"

        ]);
        UrlScreen::create([
            "url"=>"gitlab.com.png",
            "name"=>"GIT"
        ]);
        UrlScreen::create([
            "url"=>"youtube.com.png",
            'name'=>'Youtube'
        ]);
        UrlScreen::create([
            "url"=>"archive.org.png",
            'name'=>'Archive'
        ]);
        UrlScreen::create([
            "url"=>"google.com.png",
            "name"=>"Google"

        ]);
        UrlScreen::create([
            "url"=>"gitlab.com.png",
            "name"=>"GIT"
        ]);
        UrlScreen::create([
            "url"=>"youtube.com.png",
            'name'=>'Youtube'
        ]);
        UrlScreen::create([
            "url"=>"archive.org.png",
            'name'=>'Archive'
        ]);
    }
}
