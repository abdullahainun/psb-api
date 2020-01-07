<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Pendaftar extends Model
{
    // use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'pendaftar';

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'anak_ke',
        'jml_saudara',
        'id_kelas',
        'id_jurusan',
        'tinggal_pondok',
        'ayah',
        'ibu',
        'wali_alamat',
        'wali_no_telp',
        'pekerjaan',
        'pendidikan_ayah',
        'pendidikan_ibu'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password',
    // ];
}
