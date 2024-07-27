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

    public function store(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     'logo' => 'required|image|mimes:jpeg,png,jpg,gif', 
        // ]);
        // dd($request);
        $imageName = date('d');
      //  $request->logo->move(public_path('upload/images'), $imageName);

        $image =  $request->file('logo');
    $path = $image->storeAs(
        'images',
        microtime() . '-' . $image->getClientOriginalName(),
        'images'
    );
        $photo = new Photo();
        $photo->logo = $path;
        $photo->save();
        return redirect('/index');
    }
    
}
