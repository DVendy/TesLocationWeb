<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Bis extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bis';
    protected $primaryKey = 'ID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['urutan', 'stared', 'tipe', 'isi', 'kuota', 'sisa', 'jalur', 'klasifikasi', 'nama', 'hp', 'keterangan', 'waktu', 'tanggal', 'userID', 'status', 'keterangan2'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    public function maps() {
        return $this->hasMany('App\Map');
    }
}
