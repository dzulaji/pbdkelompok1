<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $fillable = ['judul', 'kode_buku', 'penerbit', 'tahun_terbit', 'jumlah_buku', 'deskripsi'];

    /**
     * Method One To Many 
     */
    public function transaksi()
    {
    	return $this->hasMany(Transaksi::class);
    }
}
