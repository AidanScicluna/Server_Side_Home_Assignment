<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    //Enable Mass Assignment
    protected $fillable = ['name', 'address', 'phone'];

    //one manufacturer can belong to many cars
    //one to many relationship
    public function cars(){
        return $this->hasMany(Car::class);
    }
}
