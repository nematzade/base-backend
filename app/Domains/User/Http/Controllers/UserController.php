<?php

namespace App\Domains\User\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(['success' => true, 'data' => $request->user()], 200);
    }
}
