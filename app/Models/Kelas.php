<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = ['id', 'nama_kelas'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (!$model->id) {
                $model->id = (string) Str::uuid();
            }
        });
    }

    // Relasi ke User
    public function users()
    {
        return $this->hasMany(User::class, 'kelas_id', 'id');
    }
}
