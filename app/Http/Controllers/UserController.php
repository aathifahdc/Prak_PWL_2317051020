<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\Kelas;

class UserController extends Controller
{
    // Menampilkan form
    public function create()
    {
        $kelas = Kelas::all();
        return view('create_user', ['kelas' => $kelas, 'title' => 'Tambah Pengguna']);
    }

    // Menyimpan data
    public function store(Request $request)
    {
        $user = new UserModel();
        $user->nama = $request->nama;
        $user->npm = $request->npm; 
        $user->kelas_id = $request->kelas_id;
        $user->save();

        return redirect()->route('user.index');
    }

    // Menampilkan daftar user
    public function index()
    {
        $users = UserModel::getUser();
        return view('list_user', ['users' => $users, 'title' => 'Daftar Pengguna']);
    }
}

