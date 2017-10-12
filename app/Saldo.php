<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    //
    
    protected $fillable = [
        'user_id',
        'tipe_transaksi',
        'total',
    ];

    public function Saldo_User(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
