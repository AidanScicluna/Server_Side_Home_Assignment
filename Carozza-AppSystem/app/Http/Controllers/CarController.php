<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\Manufacturer;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        if( request('manufacturer_id') == null ){
            $cars = Car::all();
        }else{
            $cars = Car::where( 'manufacturer_id', request('manufacturer_id') )->get();
        }

        $Manufacturers = Manufacturer::orderBy('name')->pluck('name','id')->prepend('All Manufacturers',''); 
        return view('cars.index', compact('cars','Manufacturers')); //folder Manufacturers, view called index
    }

    public function create(){
        $car = new Car();

        $Manufacturers = Manufacturer::orderBy('name')->pluck('name','id')->prepend('All Manufacturers',''); 
        return view('cars.create',compact('Manufacturers','car'));
    }

    public function show($id){
        $car = Car::find($id);
        
        return view('cars.show', compact('car'));
    }

    public function manufacturers(){
        $Manufacturers = Manufacturer::all(); 
        return view('manufacturers.index', compact('Manufacturers')); //folder manufacturers, view called index
    }

    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required',
            'year' => 'required',
            'salesperson_email' => 'required|email',
            'manufacturer_id' => 'required|exists:manufacturers,id'
        ]);

        Car::create($request->all());
        return redirect()->route('cars.index')->with('message', 'Car has been added');
    }

    public function edit($id)
    {
        $car = Car::find($id);
        
        $Manufacturers = Manufacturer::orderBy('name')->pluck('name', 'id')->prepend('All Manufacturers', '');
        return view('cars.edit', compact('Manufacturers', 'car'));
    }
}
