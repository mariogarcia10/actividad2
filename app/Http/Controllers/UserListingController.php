<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;

class UserListingController extends Controller
{
    public function __invoke(Request $request): View
    {
        return view('user-listing', [
            'users' => User::get()
        ]);
    }
}
