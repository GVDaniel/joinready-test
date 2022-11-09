<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Models\User;

class ApiUserController extends Controller
{
    // this function return one user by id
    public function users(Request $request) {
        // if table is empty, get the users via api
        if (User::count() == "0") {
            $userService = new UserService();
            $userService->getUsers();
         }

        $users = User::all();
        
        return response()->json( [
            'users' => $users,
        ]);
    }
    // this function return one user by id
    public function show(Request $request) {
        $user = User::find($request->id);

        $userService = new UserService();
        $transactions = $userService->getUserTransactions($user->user_id);
        
        return response()->json( [
            'user'          => $user,
            'transactions'  => json_decode($transactions)
        ]);
    }

}
