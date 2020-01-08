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
           'id_jurusan' => 'required|min:0|max:255',
           'tinggal_pondok' => 'required|min:0|max:255',
           'bapak_nama' => 'required|min:0|max:255',
           'bapak_alamat' => 'required|min:0|max:255',
           'bapak_no_telp' => 'required|min:0|max:255',
           'bapak_pekerjaan' => 'required|min:0|max:255',
           'bapak_pendidikan' => 'required|min:0|max:255',
           'ibu_nama' => 'required|min:0|max:255',
           'ibu_alamat' => 'required|min:0|max:255',
           'ibu_no_telp' => 'required|min:0|max:255',
           'ibu_pekerjaan' => 'required|min:0|max:255',
           'ibu_pendidikan' => 'required|min:0|max:255'
       ]);

       $id_user = $request->input("id_user");
       $nama = $request->input("nama");
       $jenis_kelamin = $request->input("jenis_kelamin");
       $tempat_lahir = $request->input("tempat_lahir");
       $tgl_lahir = $request->input("tgl_lahir");
       $alamat = $request->input("alamat");
       $anak_ke = $request->input("anak_ke");
       $jml_saudara = $request->input("jml_saudara");
       $id_jurusan = $request->input("id_jurusan");
       $tinggal_pondok = $request->input("tinggal_pondok");
       $bapak_nama = $request->input("bapak_nama");
       $bapak_alamat = $request->input("bapak_alamat");
       $bapak_no_telp = $request->input("bapak_no_telp");
       $bapak_pekerjaan = $request->input("bapak_pekerjaan");
       $bapak_pendidikan = $request->input("bapak_pendidikan");
       $ibu_nama = $request->input("ibu_nama");
       $ibu_alamat = $request->input("ibu_alamat");
       $ibu_no_telp = $request->input("ibu_no_telp");
       $ibu_pekerjaan = $request->input("ibu_pekerjaan");
       $ibu_pendidikan = $request->input("ibu_pendidikan");

       $data = [
           "id_user" => $id_user,
            "nama" => $nama,
            "jenis_kelamin" => $jenis_kelamin,
            "tempat_lahir" => $tempat_lahir,
            "tgl_lahir" => $tgl_lahir,
            "alamat" => $alamat,
            "anak_ke" => $anak_ke,
            "jml_saudara" => $jml_saudara,
            "id_jurusan" => $id_jurusan,
            "tinggal_pondok" => $tinggal_pondok,
            "bapak_nama" => $bapak_nama,
            "bapak_alamat" => $bapak_alamat,
            "bapak_no_telp" => $bapak_no_telp,
            "bapak_pekerjaan" => $bapak_pekerjaan,
            "bapak_pendidikan" => $bapak_pendidikan,
            "ibu_nama" => $ibu_nama,
            "ibu_alamat" => $ibu_alamat,
            "ibu_no_telp" => $ibu_no_telp,
            "ibu_pekerjaan" => $ibu_pekerjaan,
            "ibu_pendidikan" => $ibu_pendidikan
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