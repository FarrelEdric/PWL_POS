<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\returnValue;

class UserController extends Controller
{
    // public function index()
    // {
    // $user = UserModel::all();
    // return view('user',['data'=>$user]);


    // $user = UserModel::findOr(1, ['username', 'nama'], function () {
    //     abort(404);
    // });

    // $user = UserModel::where('username', 'manager9')->firstOrFail();

    // $user = UserModel::where('level_id', 2)->count();

    // return view('user', ['data' => $user]);

    // $user = UserModel::create([
    //     'username'=>'manager11',
    //     'nama'=>'Manager11',
    //     'password'=>Hash::make('12345'),
    //     'level_id'=>2,
    // ]);
    // $user->username = 'manager12';

    // $user->save();
    //  $user->isDirty();
    //  $user->isDirty('username');
    //  $user->isDirty('nama');
    //  $user->isDirty(['nama','username']);

    //  $user->isClean();
    //  $user->isClean('username');
    //  $user->isClean('nama');
    //  $user->isClean(['nama','username']);
    //  $user->isDirty();
    //  $user->isClean();
    //  dd($user->isDirty());

    // $user->wasChanged();
    // $user->wasChanged('username');
    // $user->wasChanged(['username','level_id']);
    // $user->wasChanged('nama');
    // dd($user->wasChanged(['nama','username']));

    // return view('user', ['data' => $user]);
    // public function tambah()
    // {
    //     return view('user_tambah');
    // }

    public function index()
    // {
    //     $user = UserModel::all();
    //     return view('user', ['data' => $user]);
    // }
    {
        $user = UserModel::with('level')->get();
        return view('user', ['data' => $user]);
    }

    public function tambah()
    {
        return view('user_tambah');
    }
    public function tambah_simpan(request $request)
    {
        // dd($request->username);
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make('$request->Password'),
            'level_id' => $request->level_id
        ]);
        return redirect('/user');
    }

    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah',['data'=>$user]);
    }

    public function ubah_simpan($id, Request $request){
        $user = UserModel::find($id);
        
        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->level_id = $request->level_id;

        $user->save();
        return redirect('/user');
    }
    
}
