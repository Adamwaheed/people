<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\EmployeeAllowance;
use App\Models\EmployeeProfile;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Employee::factory()->count(10)->has(EmployeeProfile::factory()->count(1))->create();
    }
}
