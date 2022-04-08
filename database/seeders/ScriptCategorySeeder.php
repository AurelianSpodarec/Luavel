<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

use App\Models\ScriptCategory;

class ScriptCategorySeeder extends Seeder
{

    public function createScriptCategory(string $categoryName, $categorySlug)
    {
        ScriptCategory::factory()->create([
            'name' => $categoryName,
            'slug' => $categorySlug
        ]);
    }

    public function run()
    {
        $scriptCategories = ['Minecraft', 'GTA5', 'Falout', 'Haloet', 'Need for Speed'];

        collect($scriptCategories)->each(fn (string $category) =>
            $this->createScriptCategory($category, Str::lower($category))
        );
    }
}