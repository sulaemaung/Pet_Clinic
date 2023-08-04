<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','pet_name','pet_type','doctor_name','service_id','first_date','second_date','part_of_the_Day1','part_of_the_Day2'];
}
