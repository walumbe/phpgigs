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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Listing::factory(6)->create();

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'Laravel, JavaScript',
        //     'Company' => 'CodeShop Technologies',
        //     'Location' => 'Karen, Nairobi',
        //     'email' => 'info@codeshop.co.ke',
        //     'website' => 'https://codeshop.co.ke',
        //     'description' => 'CodeShop Technologies 
        //     is an award winning software solution 
        //     provider dedicated to providing practical, 
        //     credible and quality software solutions to 
        //     various stakeholders.',
        // ]);
        // Listing::create([
        //     'title' => 'Full-Stack Developer',
        //     'tags' => 'Yii, backend, api',
        //     'Company' => 'Jambobet',
        //     'Location' => 'Parklands, Nairobi',
        //     'email' => 'info@jambobet.co.ke',
        //     'website' => 'https://codeshop.co.ke',
        //     'description' => 'Jambobet 
        //     is an award winning software solution 
        //     provider dedicated to providing practical, 
        //     credible and quality software solutions to 
        //     various stakeholders.',
        // ]);
    }
}
