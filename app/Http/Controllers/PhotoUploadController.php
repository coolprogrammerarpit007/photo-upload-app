<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoUploadController extends Controller
{
    public function show()
    {
        return view('photo-upload');
    }

    public function upload(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     'logo' => 'required|image|mimes:jpeg,png,jpg,gif', 
        // ]);
        // dd($request);
        $imageName = date('Y/m/d');
        $request->logo->move(public_path('images'), $imageName);
        $photo = new Photo();
        $photo->logo = 'public/images'.$imageName;
        // dd($photo);
        $photo->save();
        return 'Photo Uploaded sucessfully!';
    }
    
}
