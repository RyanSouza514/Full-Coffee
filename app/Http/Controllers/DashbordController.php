<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dashbord');
    }
    

}
