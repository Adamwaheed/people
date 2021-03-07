<?php

namespace Database\Factories;

use App\Models\Allowance;
use App\Models\Employee;
use App\Models\EmployeeAllowance;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeAllowanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmployeeAllowance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_id' => Employee::factory(),
            'allowance_id' => Allowance::factory(),
        ];
    }
}
