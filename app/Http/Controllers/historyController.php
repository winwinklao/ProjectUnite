<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class historyController extends Controller
{
    function index(){
        return view('Dashboard.history');
    }
}
