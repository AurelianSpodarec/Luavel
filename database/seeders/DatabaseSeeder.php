<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\User;
use \App\Models\Script;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(10)->create();

        $this->call([
            ScriptCategorySeeder::class
        ]);

        $scripts = Script::factory(10)->create(
            ['user_id' => $users->random()->id]
        );
       
      
    }
}


// $this->call([
//     IndustrySeeder::class,
//     PlatformSeeder::class
// ]);

// $companies = Company::factory(100)->create(
//     ['user_id' => $users->random()->id]
// );