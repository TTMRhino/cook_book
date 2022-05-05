<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * UserController
 */
class UserController extends Controller
{        
    /**
     * logout
     *
     * @param  mixed $request
     * @return void
     */
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
