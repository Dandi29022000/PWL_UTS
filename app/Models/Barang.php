<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Barang as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; // Model Eloquent

class Barang extends Model
{
    protected $table="barangs"; // Eloquent akan membuat model barang menyimpan record di tabel barangs
    public $timestamps= false;
    protected $primaryKey = 'id_barang'; // Memanggil isi DB Dengan primarykey
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'id_barang',
    'kode_barang',
    'nama_barang',
    'kategori_barang',
    'harga',
    'qty',
    ];
}
