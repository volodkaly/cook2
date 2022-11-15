<?php

namespace Database\Factories;

use App\Models\Reciepts;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reciepts>
 */
class RecieptsFactory extends Factory
{
    protected $model = Reciepts::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(50),
            'content' => $this->faker->text(200),
            'user_id' => rand(1,10),
            'is_modered' => rand(0,1)>0.5,
        ];
    }
}
