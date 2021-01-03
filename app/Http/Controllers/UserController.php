<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class UserController extends Controller
{
  public function index()
  {
    return view('user/index');
  }

  public function cek_nik(Request $request)
  {
    if (isset($request->nik)) {
      $pengguna = Pengguna::where('nik', $request->nik)->first();
      if ($pengguna) {
        if ($pengguna->status == 0) {
          session()->flash("sukses", "Desa {$pengguna->desa}, Kecamatan {$pengguna->kecamatan} Masih diproses");
        } else {
          session()->flash("sukses", "Desa {$pengguna->desa}, Kecamatan {$pengguna->kecamatan} Sudah diverifikasi");
        }
      } else {
        session()->flash("sukses", "NIK tidak ditemukan");
      }
    }
    return view('user/cek_nik/index');
  }

  public function registrasi()
  {
    return view('user/registrasi/index');
  }

  public function registrasi_input(Request $request)
  {

    $request->validate([
      'desa' => 'required',
      'kecamatan' => 'required',
      'nama' => 'required',
      'nik' => 'required|unique:penggunas|min:16|max:16',
      'email' => 'required',
      'no_telp' => 'required',
      'alamat' => 'required'
    ], [
      'desa.required' => 'Desa tidak boleh kosong',
      'kecamatan.required' => 'Kecamatan tidak boleh kosong',
      'nama.required' => 'Nama tidak boleh kosong',
      'nik.required' => 'NIK tidak boleh kosong',
      'nik.unique' => 'NIK sudah digunakan',
      'nik.min' => 'minimal 16 karakter',
      'nik.max' => 'maksimal 16 karakter',
      'email.required' => 'Email tidak boleh kosong',
      'no_telp.required' => 'No Telepon tidak boleh kosong',
      'alamat.required' => 'Alamat tidak boleh kosong'
    ]);

    $penggunas = Pengguna::create([
      'desa' => $request->desa,
      'kecamatan' => $request->kecamatan,
      'nama' => $request->nama,
      'nik' => $request->nik,
      'email' => $request->email,
      'no_telp' => $request->no_telp,
      'alamat' => $request->alamat,
    ]);

    // DB::table('tbl_user')->insert([

    // ]);
    return redirect('registrasi_success');
  }

  public function registrasi_success()
  {
    return view('user/registrasi/success');
  }

  public function tentang()
  {
    return view('user/tentang/index');
  }
}
