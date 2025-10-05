<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    protected $table = 'users';
    protected $fillable = ['nama', 'nim', 'kelas_id'];

    public static function getUser()
    {
        return DB::table('users')
            ->join('kelas', 'users.kelas_id', '=', 'kelas.id')
            ->select('users.*', 'kelas.nama_kelas')
            ->get();
    }
}

