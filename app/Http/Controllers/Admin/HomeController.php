<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * HomeController
 */
class HomeController extends Controller
{   
    /**
     * View(admin_panel) index.
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.home.index');
    }
}