<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table = 'kriterias';
    protected $fillable = ['id', 'nama', 'minmaks', 'pref', 'kode', 'q', 'p', 'bobot', 'created_at', 'updated_at'];

    public function preferensi()
    {
        return $this->hasOne('App\Preferensi', 'alternatif');
    }

    public function evaluasi()
    {
        return $this->hasOne('App\Evaluasi', 'kriteria');
    }

    //Hapus
    public function evaluasis()
    {
        return $this->hasMany('App\Evaluasi', 'id');
    }
}
