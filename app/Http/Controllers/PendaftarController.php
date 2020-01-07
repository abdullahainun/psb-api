<?php

namespace App\Http\Controllers;

use App\Pendaftar;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class PendaftarController extends Controller
{
    public function __construct()
    {
        $this->middleware("login");
    }

    public function index()
    {
        return "halaman pendaftar";
    }

    public function add(Request $request)
    {
       $this->validate($request, [
           'id_user' => 'required|min:0|max:255',
           'nama' => 'required|min:0|max:255',
           'jenis_kelamin' => 'required|min:0|max:255',
           'tempat_lahir' => 'required|min:0|max:255',
           'tgl_lahir' => 'required|min:0|max:255',
           'alamat' => 'required|min:0|max:255',
           'anak_ke' => 'required|min:0|max:255',
           'jml_saudara' => 'required|min:0|max:255',
           'id_kelas' => 'required|min:0|max:255',
           'id_jurusan' => 'required|min:0|max:255',
           'tinggal_pondok' => 'required|min:0|max:255',
           'ayah' => 'required|min:0|max:255',
           'ibu' => 'required|min:0|max:255',
           'wali_alamat' => 'required|min:0|max:255',
           'wali_no_telp' => 'required|min:0|max:255',
           'pekerjaan' => 'required|min:0|max:255',
           'pendidikan_ayah' => 'required|min:0|max:255',
           'pendidikan_ibu' => 'required|min:0|max:255'
       ]);

       $id_user = $request->input("id_user");
       $nama = $request->input("nama");
       $jenis_kelamin = $request->input("jenis_kelamin");
       $tempat_lahir = $request->input("tempat_lahir");
       $tgl_lahir = $request->input("tgl_lahir");
       $alamat = $request->input("alamat");
       $anak_ke = $request->input("anak_ke");
       $jml_saudara = $request->input("jml_saudara");
       $id_kelas = $request->input("id_kelas");
       $id_jurusan = $request->input("id_jurusan");
       $tinggal_pondok = $request->input("tinggal_pondok");
       $ayah = $request->input("ayah");
       $ibu = $request->input("ibu");
       $wali_alamat = $request->input("wali_alamat");
       $wali_no_telp = $request->input("wali_no_telp");
       $pekerjaan = $request->input("pekerjaan");
       $pendidikan_ayah = $request->input("pendidikan_ayah");
       $pendidikan_ibu = $request->input("pendidikan_ibu");

       $data = [
           "id_user" => $id_user,
           "nama" => $nama,
           "jenis_kelamin" => $jenis_kelamin,
           "tempat_lahir" => $tempat_lahir,
           "tgl_lahir" => $tgl_lahir,
           "alamat" => $alamat,
           "anak_ke" => $anak_ke,
           "jml_saudara" => $jml_saudara,
           "id_kelas" => $id_kelas,
           "id_jurusan" => $id_jurusan,
           "tinggal_pondok" => $tinggal_pondok,
           "ayah" => $ayah,
           "ibu" => $ibu,
           "wali_alamat" => $wali_alamat,
           "wali_no_telp" => $wali_no_telp,
           "pekerjaan" => $pekerjaan,
           "pendidikan_ayah" => $pendidikan_ayah,
           "pendidikan_ibu" => $pendidikan_ibu
       ];
       if (Pendaftar::create($data)) {
           $out = [
               "message" => "pendaftar added",
               "code"    => 201,
           ];
       } else {
           $out = [
               "message" => "failed create pendaftar",
               "code"   => 404,
           ];
       }
       return response()->json($out, $out['code']);
    }
}