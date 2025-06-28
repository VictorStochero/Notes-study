<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index($id = null)
    {
        $data = ['id' => $id];
        return view('main', $data);
    }
}
