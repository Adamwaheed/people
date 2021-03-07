<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
   return $employeeAllowance = \App\Models\EmployeeAllowance::take(10)
       ->with('employee','allowance')
       ->whereEmployeeId(2)->get();
});



