<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{
    //
    // protected $primaryKey = ''; digunakan jika nama primary key yang kita gunaakn berbeda
    // protected $timestamps = false; digunakan jika kita ingin mematikan fitur timestamps
    protected $fillable = [
        'nama',
        'alamat',
        'no_telp',
        'deskripsi',
        'harga',
        'status',
    ];

    public function Homestay_Transaksi(){
        return $this->hasMany('App\Transaksi');
    }
}
