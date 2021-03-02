<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductGroupController extends Controller
{
    function index(){
        return view('Dashboard.productGroup');
    }
}
