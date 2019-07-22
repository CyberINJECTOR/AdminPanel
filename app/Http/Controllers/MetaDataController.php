<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MetaData;

class MetaDataController extends Controller
{
    public function getAllColums() {
        $event = MetaData::all();
        return $event;
    }
}
