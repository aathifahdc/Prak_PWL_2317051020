<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\Kelas;

class UserController extends Controller
{
    public function index()
    {
        $users = UserModel::with('kelas')->get();
        return view('list_user', compact('users'));
    }

    public function create()
    {
        $kelas = Kelas::all();
        return view('create_user', compact('kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'npm' => 'required|unique:users,npm',
            'kelas_id' => 'required|exists:kelas,id'
        ]);

        UserModel::create($request->only('nama','npm','kelas_id'));
        return redirect()->route('list_user')->with('success', 'User berhasil ditambahkan');
    }

public function edit($uuid)
{
    $user = UserModel::where('uuid', $uuid)->firstOrFail();
    $kelas = Kelas::all();
    return view('edit_user', compact('user','kelas'));
}

public function update(Request $request, $uuid)
{
    $user = UserModel::where('uuid', $uuid)->firstOrFail();
    $request->validate([
        'nama' => 'required',
        'npm' => 'required|unique:users,npm,' . $user->id,
        'kelas_id' => 'required|exists:kelas,id'
    ]);

    $user->update($request->only('nama','npm','kelas_id'));
    return redirect()->route('list_user')->with('success', 'User berhasil diupdate');
}

public function destroy($uuid)
{
    $user = UserModel::where('uuid', $uuid)->firstOrFail();
    $user->delete();
    return redirect()->route('list_user')->with('success', 'User berhasil dihapus');
}

}
