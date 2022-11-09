<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Models\User;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{
    // this function gets the records of all user via api
    public function getUsers() {
        $userService = new UserService();
        $users = $userService->getUsers();
        return $userService->setUsers($users);

        return ["status" => 200];
    }

    // this function gets the transaction records of an specific user via api
    public function getUserTransactions($id) {
        $userService = new UserService();
        return $userService->getUserTransactions($id);
    }

    // this function return one user by id
    public function show(Request $request) {
        $user = User::find($request->id);
        return view('/user', compact(['user']));
    }

    // this function return default view
    public function index() {
       return view('/users');
    }

    // this function return all users saved in database and returns it
    // ready maped for datatable
    public function users(Request $request) {
        if (User::count() == "0") {
           return $this->getUsers();
        }
        if ($request->ajax()) {
            $data = User::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="users/'.$row["id"].'" class="edit btn btn-success btn-sm">Ver</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return Datatables::of(User::query())->make(true);        
    }

    // this function return all user transactions in database and returns it
    // ready maped for datatable
    public function transactions(Request $request) {
        $transactions = $this->getUserTransactions((int) $request->id);
        if ($request->ajax()) {
            if ($transactions == []){
                return false;
            }
            return Datatables::of(json_decode($transactions))
                ->addIndexColumn()
                ->make(true);
        }
    }
}
