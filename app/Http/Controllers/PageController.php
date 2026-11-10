<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if (empty($username) || empty($password)) {
            return back()->with('error', 'Username atau Password masih kosong.');
        }
        return redirect()->route('dashboard', ['username' => $username]);

    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');

        if (empty($username)) {
        return redirect()->route('login');
        }

        $total = count($this->getInventaris());

        return view('dashboard', compact('username', 'total'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username');

        if (empty($username)) {
            return redirect()->route('login');
        }

        $inventaris = $this->getInventaris();
        return view('pengelolaan', compact('username', 'inventaris'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');

        if (empty($username)) {
        return redirect()->route('login');
        }

        $profile = [
        'peran'            => 'Asisten Laboratorium',
        'divisi'           => 'Observasi Planet & Bintang Ganda',
        'jumlah_observasi' => 24,];

    return view('profile', compact('username', 'profile'));
    }

    private function getInventaris()
    {
        return [
            ['id' => '001', 'nama' => 'Teleskop Refraktor 90 mm',  'kategori' => 'Teleskop',     'lokasi' => 'Observatorium Atap', 'status' => 'Tersedia',  'kondisi' => 'Baik'],
            ['id' => '002', 'nama' => 'Dobsonian 8 inci',          'kategori' => 'Teleskop',     'lokasi' => 'Observatorium Atap', 'status' => 'Dipinjam',  'kondisi' => 'Baik'],
            ['id' => '003', 'nama' => 'Mount Ekuatorial GoTo',     'kategori' => 'Mount',        'lokasi' => 'Ruang Alat',         'status' => 'Tersedia',  'kondisi' => 'Perlu Kalibrasi'],
            ['id' => '004', 'nama' => 'Kamera CCD Astrofotografi', 'kategori' => 'Kamera',       'lokasi' => 'Lemari Optik',       'status' => 'Perawatan', 'kondisi' => 'Rusak Ringan'],
            ['id' => '005', 'nama' => 'Filter H-alpha',            'kategori' => 'Aksesori',     'lokasi' => 'Lemari Optik',       'status' => 'Tersedia',  'kondisi' => 'Baik'],
            ['id' => '006', 'nama' => 'Set Eyepiece Plossl',       'kategori' => 'Aksesori',     'lokasi' => 'Lemari Optik',       'status' => 'Dipinjam',  'kondisi' => 'Baik'],
            ['id' => '007', 'nama' => 'Teleskop Surya',            'kategori' => 'Teleskop',     'lokasi' => 'Observatorium Atap', 'status' => 'Tersedia',  'kondisi' => 'Baik'],
            ['id' => '008', 'nama' => 'Spektrograf Sederhana',     'kategori' => 'Spektroskopi', 'lokasi' => 'Ruang Analisis',     'status' => 'Perawatan', 'kondisi' => 'Perlu Kalibrasi'],
        ];
    }

}   
