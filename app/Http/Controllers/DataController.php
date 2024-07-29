<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    public function index()
    {
        // Retrieve stored data from file
        $data = json_decode(Storage::get('data.json'), true) ?? [];
        return view('welcome', compact('data'));
    }

    public function store(Request $request)
    {
        $data = json_decode(Storage::get('data.json'), true) ?? [];
        $data[] = $request->all();
        Storage::put('data.json', json_encode($data));

        return response()->json(['success' => true]);
    }
}

?>