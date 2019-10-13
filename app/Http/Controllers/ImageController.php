<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    public function getImageArrayListById($request) {
        // $imageArrayList = Image::find($request->input('idEvent'));
        $imageArrayList = DB::table('image')->where('idEvent', $request)->get();
        return $imageArrayList;
    }
}
