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
        'id_users',
        'nama',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'anak_ke',
        'jml_saudara',
        'id_jurusan',
        'bapak_nama',
        'bapak_alamat',
        'bapak_no_telp',
        'bapak_pekerjaan',
        'bapak_pendidikan',
        'ibu_nama',
        'ibu_alamat',
        'ibu_no_telp',
        'ibu_pekerjaan',
        'ibu_pendidikan'
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
