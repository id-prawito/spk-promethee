<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preferensi extends Model
{
    protected $table = 'preferensis';
    protected $fillable = ['id', 'nama', 'created_at', 'updated_at'];

    public function kriteria()
    {
        return $this->hasOne('App\Kriteria', 'pref');
    }
}
