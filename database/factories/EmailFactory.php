<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Email>
 */
class EmailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $isRead = $this->faker->boolean(60);
        $isFav = $this->faker->boolean(20);

        return [
            'full_name'     => $this->faker->name(),
            'company_name'  => $this->faker->company(),
            'email'         => $this->faker->safeEmail(),
            'phone'         => $this->faker->phoneNumber(),
            'details'       => $this->faker->paragraph(4),

            'is_read'       => $isRead,
            'read_at'       => $isRead ? now()->subDays(rand(0, 10)) : null,

            'is_fav'        => $isFav,

            'created_at'    => $this->faker->dateTimeBetween('-30 days', 'now'),
            'updated_at'    => now(),
        ];
    }
}
