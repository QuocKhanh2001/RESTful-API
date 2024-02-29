<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\User;
use App\services\UserService; 

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    
    public function index()
    {
        //return view('users.index');
        return response()->json([
            'data' => User::all(),
        ]);
    }

    public function search(Request $request)
    {
        try {
            $user = $this->userService->search($request->input('user_id'));
        } catch (UserException $exception) {
            throw $exception;
        }

        return view('users.search', compact('user'));
    }

}
