<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function index() {
        $comics = Comic::all();
        return view('admin.houses.index', compact('comics'));
    }
}
