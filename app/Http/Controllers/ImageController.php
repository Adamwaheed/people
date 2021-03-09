<?php

namespace App\Http\Controllers;

use App\Models\Imageable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function store(Request $request)
    {

        $ex = $request->file('file')->getClientOriginalExtension();

        $path = Storage::disk('public')->putFileAs(
            $request->imageable_type, $request->file('file'), uniqid() . '.' . $ex
        );

        $image = new Imageable();
        $image->path = $path;
        $image->imageable_id = $request->imageable_id;
        $image->imageable_type = 'App\\Models\\'.$request->imageable_type;
        $image->save();

        return redirect()->back();


    }
}
