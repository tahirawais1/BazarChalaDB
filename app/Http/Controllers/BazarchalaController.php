<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class BazarchalaController extends Controller
{

    public function createProfile(Request $request)
    {
        $supplier = Supplier::create($request->all());
        
        return response()->json($supplier, 201);
    }

}