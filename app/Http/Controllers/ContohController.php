<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = [
            'nama', 'nis ', 'kelas', 'jurusan', 'hobby', 'ekskul',
            'tanggal_lahir', 'umur', 'alamat', 'asal_sekolah'
        ];
        $fakultas = [
            'perguruan_tinggi', 'tanggal_berdiri ', 'nomor_sk_pt', 'tanggal_sk_pt', 'alamat', 'kota',
            'kodepos', 'telepon', 'faximile', 'email'
        ];
        $transaksi = [
            'harga', 'namabarang ', 'kode', 'supplier', 'customer', 'pemasukan',
            'pengeluaran', 'genre', 'jenis', 'tag'
        ];
        $lagu = [
            'judul', 'artis ', 'genre', 'tag', 'kategori', 'artikel',
            'tahunrilis', 'playlist', 'album', 'tracks'
        ];
        $film = [
            'namafilm', 'genre ', 'tahunrilis', 'tag', 'kategori', 'ratting',
            'artikel', 'produser', 'tokoh_utama', 'namapemeran'
        ];
        return [$mahasiswa, $fakultas, $transaksi, $lagu, $film];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
