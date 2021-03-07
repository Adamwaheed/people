<?php

namespace Database\Factories;

use App\Models\EmployeeSales;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeSalesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmployeeSales::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $amount = rand(100,10000);
        return [
            'product_name'=>$this->faker->name,
            'amount'=>rand(100,10000),
            'gst'=> round(($amount * 0.06),4),
        ];
    }
}
