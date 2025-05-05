<?php

namespace App\Http\Controllers;

use App\Models\DummyData;
use Illuminate\Http\Request;

class DummyDataController extends Controller
{
    public function addData(Request $request){
        $items = new DummyData();
        $items->name = $request->name;
        $items->save();

        return response()->json('added successfully', 200);
    }
}
