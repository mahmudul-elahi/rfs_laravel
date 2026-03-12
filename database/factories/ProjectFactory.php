<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => 'https://picsum.photos/640/480?random=' . rand(1, 1000),
            'heading' => $this->faker->sentence(3),
            'title' => $this->faker->sentence(6),
            'description' => $this->faker->paragraphs(3, true),
            'about_title' => $this->faker->sentence(4),
            'about_description' => $this->faker->paragraphs(2, true),
            'client_website' => $this->faker->url(),
            'meta_title' => $this->faker->sentence(5),
            'slug' => Str::slug($this->faker->unique()->sentence(3)),
        ];
    }
}
