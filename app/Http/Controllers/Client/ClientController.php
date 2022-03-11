<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Age;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {
      $ages = Age::all();
      return view('client.index', compact('ages'));
    }
}
