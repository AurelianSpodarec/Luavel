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
            'category_id' => ScriptCategory::all()->random()->id,
            'title' => $title,
            'slug' => Str::slug($title) . '-' . rand(1111, 9999),
            'thumbnail' => 'https://camo.githubusercontent.com/e94942abd64482cf96cc6f5a75581b597c44aa641a297a67a6c13175bb0295c9/68747470733a2f2f692e696d6775722e636f6d2f486147766c55622e706e67',
            'description' => $this->faker->paragraph(10, true),
            'excerpt' => $this->faker->paragraph(1, true)
        ];
    }
}