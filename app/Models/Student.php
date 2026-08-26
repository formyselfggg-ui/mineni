<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  use HasFactory;
  protected $fillable = [
      'first_name',
      'last_name',
      'email',
      'gender',
      'birthday',
      'program',
      'yr_level', 
      'age'
     
  ];

  protected $casts =[
    'birthday' => 'date',  
    ];
    
    protected $apends =[
    'age'
    ]; 

public function getAgeAttribute(){
  return $this->birthday?->age;
}
    }
