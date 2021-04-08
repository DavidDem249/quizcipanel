<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    

    public function index()
    {
    	return View('admin.index');
    }
}
