<?php

namespace Database\Factories;

use App\Models\Sell;
use Illuminate\Database\Eloquent\Factories\Factory;

class SellFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sell::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1,10),
            'date' => now(),
            'day' => 27,
            'amount' => rand(1,10),
            'price' => rand(10,17),
            'paid_amount' => rand(50,100),
            'debt_amount' => 0,
            'product' => 'agua',
            'order' => rand(0,1),
            'trip' => rand(0,4),
        ];
    }
}
