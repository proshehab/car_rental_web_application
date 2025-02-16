<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

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
        'availability' => 'required|boolean',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);


    if ($request->file('image')){
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'. $request->file('image')->getClientOriginalExtension();
        $img = $manager->read($request->file('image'));
        $img = $img->resize(500,500);

        $img->toJpeg(80)->save(base_path('public/upload/car_images/'.$name_gen));
        $save_url = 'upload/car_images/' .$name_gen;

        Car::create([
            'name' => $request->car_name,
            'brand' => $request->brand,
            'model' => $request->model,
            'year' => $request->year,
            'car_type' => $request->car_type,
            'daily_rent_price' => $request->daily_rent_price,
            'availability' => $request->availability,
            'image' => $save_url,
        ]);
    }


    // $imagePath = $request->file('car_image')->store('public/upload/car_image/');



    // return redirect()->route('admin.manage-cars')->with('success', 'Car added successfully!');

    $notification = array(
        'message' => 'Car Inserted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('admin.manage-cars')->with($notification);
}


    public function edit ($id){

    $cars= Car::findOrFail($id);
    return view("admin.manage_cars.edit",compact('cars'));


    }


    public function update(Request $request,$id){

           //dd($request->all());
        // $hero_id = $request->id;
        $old_img = $request->old_image;

        $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'car_type' => 'required|string',
            'daily_rent_price' => 'required|numeric|min:0',
            'availability' => 'required|boolean',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->file('image')) {
            // Delete the old image if a new image is uploaded
            unlink($old_img);
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            $img = $img->resize(500, 500);

            $img->toJpeg(80)->save(base_path('public/upload/car_images/' . $name_gen));
            $save_url = 'upload/car_images/' . $name_gen;

            // Update the Hero record with the new image
            Car::findOrFail($id)->update([
                'name' => $request->name,
                'brand' => $request->brand,
                'model' => $request->model,
                'year' => $request->year,
                'car_type' => $request->car_type,
                'daily_rent_price' => $request->daily_rent_price,
                'availability' => $request->availability,
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Car Updated with Image Successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('admin.manage_cars.edit')->with($notification);
        } else {
            // Update the Hero record without changing the image
            Car::findOrFail($id)->update([
                'name' => $request->name,
                'brand' => $request->brand,
                'model' => $request->model,
                'year' => $request->year,
                'car_type' => $request->car_type,
                'daily_rent_price' => $request->daily_rent_price,
                'availability' => $request->availability,

            ]);

            $notification = array(
                'message' => 'Car Updated without Image!',
                'alert-type' => 'error',
            );

            return redirect()->route('admin.manage_cars.edit')->with($notification);
        }

    }

    public function destroy(string $id)
    {
        $cars = Car::findOrFail($id);
        $cars->delete();

        // Alert::success('Data Delete Successfully');
        return redirect()->back();
    }

}
