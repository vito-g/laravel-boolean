<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App/Car;

class TheController extends Controller
{
    public function index() {
      return view('list');
    }
}
