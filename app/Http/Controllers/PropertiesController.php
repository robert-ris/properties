<?php

namespace App\Http\Controllers;

use App\Properties;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'area' => 'required',
            'beds' => 'required',
            'baths' => 'required',
            'garages' => 'required',
            'price' => 'required',
            'description' => 'required',
            'cover_image' => 'required|image|max:1999',
        ]);

        $cover_image = $request->file('cover_image');
        $slug = pathinfo($cover_image, PATHINFO_FILENAME);

        if(isset($cover_image)){
//            make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $cover_imageName = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $cover_image->getClientOriginalExtension();
//            check dir if exist
            if(!Storage::disk('public')->exists('cover_image')){
                Storage::disk('public')->makeDirectory('cover_image');
            }
//            resize cover_image and upload
            $cover_imageToUpload = Image::make($cover_image)->resize(800, 600)->save();
            Storage::disk('public')->put('cover_image/' . $cover_imageName, $cover_imageToUpload );
        }else{
            $cover_imageName = "default.png";
        }

        $property = new Properties();
        $property->address = $request->address;
        $property->city = $request->city;
        $property->country = $request->country;
        $property->area  = $request->area;
        $property->beds = $request->beds;
        $property->baths = $request->baths;
        $property->garages = $request->garages;
        $property->price = $request->price;
        $property->description = $request->description;
        $property->cover_image = $cover_imageName;
        $property->save();
        Toastr::success('Property Successfully Saved!', 'Success');
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Properties::find($id);
        return view('pages.show')->with('property', $property);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Properties::find($id);
        return view('admin.edit')->with('property', $property);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'area' => 'required',
            'beds' => 'required',
            'baths' => 'required',
            'garages' => 'required',
            'price' => 'required',
            'description' => 'required',
            'cover_image' => 'required|image|max:1999',
        ]);

        $cover_image = $request->file('cover_image');
        $slug = pathinfo($cover_image, PATHINFO_FILENAME);
        $property = Properties::find($id);

        if(isset($cover_image)){
//            make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $cover_imageName = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $cover_image->getClientOriginalExtension();
//            check dir if exist
            if(!Storage::disk('public')->exists('cover_image')){
                Storage::disk('public')->makeDirectory('cover_image');
            }
//            delete old image
            if (Storage::disk('public')->exists('cover_image/' . $property->cover_image)){
                Storage::disk('public')->delete('cover-image/' . $property->cover_image);
            }
//            resize cover_image and upload
            $cover_imageToUpload = Image::make($cover_image)->resize(800, 600)->save();
            Storage::disk('public')->put('cover_image/' . $cover_imageName, $cover_imageToUpload );
        }else{
            $cover_imageName = "default.png";
        }

        $property->address = $request->address;
        $property->city = $request->city;
        $property->country = $request->country;
        $property->area  = $request->area;
        $property->beds = $request->beds;
        $property->baths = $request->baths;
        $property->garages = $request->garages;
        $property->price = $request->price;
        $property->description = $request->description;
        $property->cover_image = $cover_imageName;
        $property->save();
        Toastr::success('Property Successfully Updated!', 'Success');
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Properties::find($id);
        if (Storage::disk('public')->exists('cover_image/' . $property->cover_image)){
            Storage::disk('public')->delete('cover_image/' . $property->cover_image);
        }

        $property->delete();
        Toastr::success('Property Successfully Deleted', 'Success');
        return redirect()->route('dashboard');
    }
}
