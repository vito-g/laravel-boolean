<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TheController extends Controller
{
    public function index() {
      return view('list');
    }
}
