<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ScriptCategory>
 */
class ScriptCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categoryName = $this->faker->word();

        return [
            'name' => $categoryName,
            'slug' => Str::slug($categoryName) . "-" . rand(1111, 9999)
        ];
    }
}
