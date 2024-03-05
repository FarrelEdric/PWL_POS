<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            // 'level_id' => 2,
            // 'username' => 'manager_dua',
            // 'nama' => 'manager 2',
            // 'password' => Hash::make('12345')

            // 'username'=>'customer-1',
            // 'nama' =>'Pelanggan',
            // 'password' => Hash::make('12345'),
            // 'level_id' => 4
            'nama' => 'Pelanggan Pertama',
        ];
        // UserModel::created($data);

        // UserModel::insert($data); //tabahkan data ke table m_user

        UserModel::where('username', 'customer-1')->update($data);

        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
