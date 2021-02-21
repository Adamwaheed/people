<?php

namespace Database\Factories;

use App\Models\Allowance;
use Illuminate\Database\Eloquent\Factories\Factory;

class AllowanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Allowance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $trueorfalse=[true,false];
        return [
            'name'=>$this->faker->colorName.' allowance',
            'amount'=>rand(1000,9999),
            'percentage'=>$trueorfalse[rand(0,1)],

        ];
    }
}
