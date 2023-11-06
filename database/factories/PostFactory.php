<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->unique()->jobTitle;
        return [
            "thumbnail"=> "assets/img/post/p".random_int(1,10).".jpg",
            'title' => $title,
            "slug"=> Str::slug($title),
            'body' => $this->faker->text(5000),
            'category_id'=> random_int(1,10),
            'user_id'=> random_int(2,11),
            'is_approved' => false
        ];
    }
}
