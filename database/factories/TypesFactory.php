<?php

namespace Database\Factories;

use App\Models\Types;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TypesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Types::class;
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->text(),
            'engName' => fake()->unique()->word(),
            'image' => fake()->imageUrl(),
        ];
    }
}
