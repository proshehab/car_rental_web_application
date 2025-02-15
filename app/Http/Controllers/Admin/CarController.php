<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index(){
        $cars = Car::orderBy('created_at', 'ASC')->get();
        return view('admin.manage_cars.index',compact('cars'));
    }

    public function add(){
        return view('admin.manage_cars.create');
    }


    public function storeCar(Request $request)
{
    $request->validate([
        'car_name' => 'required|string|max:255',
        'brand' => 'required|string|max:255',
        'model' => 'required|string|max:255',
        'year' => 'required|integer|min:1900|max:' . date('Y'),
        'car_type' => 'required|string',
        'daily_rent_price' => 'required|numeric|min:0',
        'availability_status' => 'required|boolean',
        'car_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $imagePath = $request->file('car_image')->store('public/upload/car_image/');

    Car::create([
        'name' => $request->car_name,
        'brand' => $request->brand,
        'model' => $request->model,
        'year' => $request->year,
        'car_type' => $request->car_type,
        'daily_rent_price' => $request->daily_rent_price,
        'availability' => $request->availability_status,
        'image' => $imagePath,
    ]);

    return redirect()->route('admin.manage-cars')->with('success', 'Car added successfully!');
}

}
