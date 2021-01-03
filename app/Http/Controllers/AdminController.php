<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class AdminController extends Controller
{
  public function index()
  {
    return view('admin/index');
  }
  public function user()
  {
    $penggunas = Pengguna::all();
    return view('admin/data_user/view/user', compact('penggunas'));
  }
  public function user_detail($id)
  {
    $penggunas = Pengguna::find($id);
    // dd($pengguna->desa);
    return view('admin/data_user/view/user_detail', compact('penggunas'));
  }

  public function user_edit(Pengguna $penggunas)
  {
    $penggunas = Pengguna::all();
    return view('admin/data_user/edit/edit_view', compact('penggunas'));
  }
  public function user_add()
  {
    return view('admin/data_user/add/add_user');
  }

  public function admin_add(Request $request)
  {
    $request->validate([
      'desa' => 'required|unique:penggunas',
      'kecamatan' => 'required',
      'nama' => 'required',
      'nik' => 'required|unique:penggunas|min:16|max:16',
      'email' => 'required|unique:penggunas',
      'no_telp' => 'required|unique:penggunas|min:10|max:15',
      'alamat' => 'required'
    ], [
      'desa.required' => 'Desa tidak boleh kosong',
      'desa.unique' => 'Desa telah terdaftar',
      'kecamatan.required' => 'Kecamatan tidak boleh kosong',
      'nama.required' => 'Nama tidak boleh kosong',
      'nik.required' => 'NIK tidak boleh kosong',
      'nik.unique' => 'NIK sudah digunakan',
      'nik.min' => 'minimal 16 karakter',
      'nik.max' => 'maksimal 16 karakter',
      'email.required' => 'Email tidak boleh kosong',
      'email.unique' => 'Email sudah pernah terdaftar, mohon untuk menggunakan email lain',
      'no_telp.required' => 'No Telepon tidak boleh kosong',
      'no_telp.unique' => 'Notelp sudah pernah terdaftar, mohon untuk menggunakan notelp lain',
      'no_telp.min' => 'Mohon masukan notelp dengan benar',
      'no_telp' => 'Mohon masukan notelp dengan benar',
      'alamat.required' => 'Alamat tidak boleh kosong',
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
    return redirect('admin/user');
  }
}
