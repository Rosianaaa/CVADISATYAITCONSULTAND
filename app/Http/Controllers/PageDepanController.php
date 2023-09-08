<?php

namespace App\Http\Controllers;
use App\Models\DonorDarah;
use App\Models\Pendaftar;
use App\Models\Stok;

use Illuminate\Http\Request;

class PageDepanController extends Controller
{
    // Member
    public function beranda(Request $request){
        return view('beranda');
    }

    public function stok(Request $request){
        $donordarah = new Stok();
        $donordarah = $donordarah->all();

        $data = [
            'donordarah' => $donordarah
        ];
        return view('stok', $data);
    }

    public function dokter(Request $request){
        return view('dokter');
    }

    public function tentang(Request $request){
        return view('tentang');
    }

    public function data(Request $request){
        return view('data');
    }

    public function blog(Request $request){
        return view('blog');
    }

    public function kontak(Request $request){
        return view('kontak');
    }

    public function register_member(Request $request){

        $goldar = new Pendaftar();
        $goldar->nama = $request->nama_lengkap;
        $goldar->alamat = $request->alamat;
        $goldar->tanggal_lahir = $request->tanggal;
        $goldar->golongan_darah = $request->goldar;
        $goldar->nomor_tlp = $request->nomor_hp;
        $goldar->nomor_wa = $request->nomor_wa;
        $goldar->tempat_lahir = $request->tempat_lahir;
        $goldar->jenis_kelamin = $request->gender;
        $goldar->tanggal_donor = date('Y-m-d');
        $goldar->save();

        $stok = new Stok();
        $stok = $stok->where('golongan_darah', strtoupper($goldar->golongan_darah))->first();
        if($stok){
            $stok->jumlah = $stok->jumlah + 1;
            $stok->save();
        }

        return redirect(url('').'/data');
    }

    // admin 
    public function admin(Request $request){
        $donordarah = new Pendaftar();
        $donordarah = $donordarah->all();

        $data = [
            'donordarah' => $donordarah
        ];
        return view('admin', $data);
    }

    public function admin_stok_tambah(Request $request){
        $donordarah = new DonorDarah();
        $donordarah = $donordarah->all();

        $data = [
            'donordarah' => $donordarah
        ];
        return view('admin', $data);
    }

    public function tambahdataview(Request $request){
        return view('tambahdata');
    }

    public function tambahdata(Request $request){

        $goldar = new Pendaftar();
        $goldar->nama = $request->nama_lengkap;
        $goldar->alamat = $request->alamat;
        $goldar->tanggal_lahir = $request->tanggal;
        $goldar->golongan_darah = $request->goldar;
        $goldar->nomor_tlp = $request->nomor_hp;
        $goldar->nomor_wa = $request->nomor_wa;
        $goldar->tempat_lahir = $request->tempat_lahir;
        $goldar->jenis_kelamin = $request->gender;
        $goldar->tanggal_donor = date('Y-m-d');
        $goldar->save();

        $stok = new Stok();
        $stok = $stok->where('golongan_darah', strtoupper($goldar->golongan_darah))->first();
        if($stok){
            $stok->jumlah = $stok->jumlah + 1;
            $stok->save();
        }

        return redirect(url('').'/data');
    }

    public function listpen(Request $request){

        $pendaftar = new Pendaftar();
        $pendaftar = $pendaftar->all();
        $data = [
            "donordarah" => $pendaftar
        ];
        return view('listpen', $data);
    }
}