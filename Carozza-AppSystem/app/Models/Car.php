<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    //Enable Mass Assignment
    protected $fillable = ['model', 'year', 'salesperson_email', 'manufacturer_id'];

    //many cars can belong to a single manufacturer
    //many to one relationship
    public function manufacturer(){
        return $this->belongsTo(manufacturer::class);
    }
}
