<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AddUuidToUsersTable extends Migration
{
    public function up(): void
    {
        // Kalau kolom uuid sudah ada, jangan tambah lagi
        // Generate UUID untuk baris lama jika kosong
        DB::table('users')->get()->each(function ($user) {
            if (empty($user->uuid)) {
                DB::table('users')->where('id', $user->id)
                    ->update(['uuid' => (string) Str::uuid()]);
            }
        });

        // Set uuid NOT NULL
        DB::statement('ALTER TABLE users ALTER COLUMN uuid SET NOT NULL');

        // Set uuid sebagai primary key
        DB::statement('ALTER TABLE users DROP CONSTRAINT users_pkey');
        DB::statement('ALTER TABLE users ADD PRIMARY KEY (uuid)');
    }

    public function down(): void
    {
        // Kembalikan primary key ke id
        DB::statement('ALTER TABLE users DROP CONSTRAINT users_pkey');
        DB::statement('ALTER TABLE users ADD PRIMARY KEY (id)');
    }
}
