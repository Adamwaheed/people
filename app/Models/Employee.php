<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public $fillable = ['name','address','contact','email'];


    public function employeeAllowances(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(EmployeeAllowance::class);
    }

    public function employeeProfile(): \Illuminate\Database\Eloquent\Relations\hasOne
    {
        return $this->hasOne(EmployeeProfile::class);
    }

    public function allowance(): \Illuminate\Database\Eloquent\Relations\belongsToMany
    {
        return $this->belongsToMany(Allowance::class,'employee_allowances');
    }

    public function tags(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Tag::class,'taggable');
    }

    public function images(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Imageable::class,'imageable');
    }
}
