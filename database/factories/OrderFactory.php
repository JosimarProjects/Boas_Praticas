<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Order;


class OrderFactory extends Factory
{
     protected $model = Order::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'status' => $this->faker->randomElement(['pending', 'delivered', 'cancel']),
            'paid' => $this->faker->boolean(50),
            'track_code' => md5(uniqid(rand(), true))
        ];
    }
}
