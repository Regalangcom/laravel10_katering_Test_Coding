<?php

namespace Database\Factories;

use App\Models\MenuModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class menuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = MenuModel::class;
    public function definition(): array
    {
        return [
            'merchant_id' => 1,
            'nama' => $this->faker->word,
            'deskripsi' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 5, 100),
        ];
    }
}
