<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoeController extends Controller
{
    public function index()
    {
        $json = file_get_contents(public_path('shoes.json'));
        return response()->json(json_decode($json));
    }
}
