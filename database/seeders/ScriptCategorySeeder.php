<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\ScriptCategory;

class ScriptCategorySeeder extends Seeder
{

    public function createScriptCategory(string $category)
    {
        ScriptCategory::factory()->create([
            'name' => $category,
            'slug' => $category
        ]);
    }

    public function run()
    {
        $scriptCategories = ['Minecraft', 'GTA5', 'Falout', 'Haloet', 'Need for Speed'];

        collect($scriptCategories)->each(fn (string $category) =>
            $this->createScriptCategory($category)
        );
    }
}