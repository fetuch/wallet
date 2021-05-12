<?php

namespace Database\Factories;

use App\Models\Resource;
use App\Models\Valuation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ValuationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Valuation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'resource_id' => Resource::class,
            'date' => $this->faker->date(),
            'amount' => $this->faker->randomFloat(4),
        ];
    }
}
