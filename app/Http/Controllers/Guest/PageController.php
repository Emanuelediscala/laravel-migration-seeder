<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $trains = Train::where('data_di_partenza','2023-06-29')->get();
        return view('welcome', compact('trains'));
    }
}
