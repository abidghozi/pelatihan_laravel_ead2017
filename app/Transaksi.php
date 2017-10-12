<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //

    protected $fillable = [
        'user_id',
        'homestay_id',
        'status',
        'tanggal_masuk',
        'tanggal_keluar',
    ];

    public function Transaksi_User(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function Transaksi_Homestay(){
        return $this->belongsTo('App\Homestay', 'homestay_id');
    }
}
