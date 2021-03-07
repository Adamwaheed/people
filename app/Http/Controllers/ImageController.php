<?php

namespace App\Http\Controllers;

use App\Models\imageable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function store(Request $request)
    {

        $ex = $request->file('file')->getClientOriginalExtension();

        $path = Storage::putFileAs(
            'avatars', $request->file('file'), uniqid() . '.' . $ex
        );

        $image = new imageable();
        $image->path = $path;
        $image->imageable_id = $request->imageable_id;
        $image->imageable_type = 'App\\Models\\'.$request->imageable_type;
        $image->save();


    }
}
