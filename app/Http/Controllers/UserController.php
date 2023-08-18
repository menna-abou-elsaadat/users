<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Services\UserService;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        return view('user.create');
    }

    public function store(UserRequest $request)
    {
        $validated = $request->validated();
        $user = UserService::createUser($request->first_name,$request->last_name,$request->file('image'));

        return Redirect::route('create.index')->with('user', $user);

    }
}
