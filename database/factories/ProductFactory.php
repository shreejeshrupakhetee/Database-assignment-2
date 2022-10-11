<?php

namespace Database\Factories;
// use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // protected $model = Product::class;

    public function definition()
    {
        return [
            'name' =>  $this->faker->name(),
            'category' => $this->faker->text(),
            'status' => Str::random(10),
        ];
    }
}
