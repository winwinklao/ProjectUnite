<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rankingExportController extends Controller
{
    function index(){
        return view('Dashboard.rankingExport');
    }
}
