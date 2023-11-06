<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->title;
        return [
            "thumbnail"=> "assets/img/post/p".random_int(1,10).".jpg",
            'title' => $name,
            "slug"=> Str::slug($name),
            'category_id'=> random_int(1,10),
            'body' => $this->faker->text(5000),

            'user_id'=> random_int(2,11),
            'is_approved' => false
        ];
    }
}
