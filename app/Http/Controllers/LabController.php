<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
    public function index()
    {
        $data = [];
        return view('lab.index',$data);
    }
}
