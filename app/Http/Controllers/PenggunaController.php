<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use Mail;
use App\Mail\Verifikasi;
use App\Mail\Tolak;

class PenggunaController extends Controller
{
    public function index($status = 0)
    {
        $penggunas = Pengguna::where('status', '=', $status)->paginate(10);
        $title = "";
        if ($status == 0) {
            $title = "Belum Diproses";
        } else {
            $title = "Sudah Diverifikasi";
        }
        return view('admin/pengguna/index', compact('penggunas', 'title'));
    }
    public function show($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('admin/pengguna/detail', compact('pengguna'));
    }
    public function edit($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('admin/pengguna/edit', compact('pengguna'));
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'desa' => 'required',
            'kecamatan' => 'required',
            'nama' => 'required',
            'nik' => "required|unique:penggunas,nik,{$id}|min:16|max:16",
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
            'alamat.required' => 'Alamat tidak boleh kosong',
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong'
        ]);
        $pengguna = Pengguna::where('id', $id)->update($request->except('_token'));
        session()->flash('sukses', 'Pengguna berhasil diubah');
        return redirect()->back();
    }
    public function delete($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        $details = [];
        Mail::to($pengguna->email)->send(new Tolak($details));
        $pengguna->delete();
        session()->flash('sukses', 'Pengguna berhasil ditolak dan dihapus');
        return redirect()->back();
    }
    public function verif($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        $details = [];
        Mail::to($pengguna->email)->send(new Verifikasi($details));
        $update = Pengguna::where('id', $id)->update(['status' => 1]);
        session()->flash('sukses', 'Pengguna berhasil diverif');
        return redirect()->back();
    }
}
