<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\ScriptCategory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Script>
 */
class ScriptFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->word();
        
        return [
            'user_id' => User::all()->random()->id,
            'title' => $title,
            'slug' => Str::slug($title) . '-' . rand(1111, 9999),
            'category_id' => ScriptCategory::all()->random()->id,
            'excerpt' => $this->faker->paragraph(1, true)
        ];
    }
}