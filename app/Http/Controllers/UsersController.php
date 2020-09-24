<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
    public function index () {
        // $users = User::all();
        $users = [
            [
                'title' => 'test',
            ],
            [
                'title' => 'test1',
            ],
            [
                'title' => 'test2',
            ]
        ];
        return response()->json($users);
        // die('text');
    }
}


