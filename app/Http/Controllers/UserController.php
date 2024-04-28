<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function myProfile(): View
    {
        return View('my-profile');
    }

    public function profile(): View
    {
        return View('profile');
    }
}
