<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contoh3;

class ContohController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Contoh3::all();
        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    public function index1()
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

    public function index2()
    // GET
    {
        $data = [
            [
                "nama" => "Chandra",
                "umur" => 15,
                "nrp" => "089676058605",
                "lulus" => true,
                "hobby" => "ngoding php",
                "sekolah" => "SMK ASSALAAM BANDUNG",
                "pembimbing" => [
                    "pembimbing1" => "Onay XL",
                    "pembimbing2" => "Aang L",
                    "pembimbing3" => "Toni M",
                    "pembimbing4" => "Oded S"
                ]
            ],
            [
                "nama" => "Iqra Nafshaka",
                "umur" => 17,
                "nrp" => "089676058605",
                "lulus" => true,
                "hobby" => "ngoding php",
                "sekolah" => "SMK ASSALAAM BANDUNG",
                "pembimbing" => [
                    "pembimbing1" => "Onay XL",
                    "pembimbing2" => "Aang L",
                    "pembimbing3" => "Toni M",
                    "pembimbing4" => "Oded S"
                ]
            ],
            [
                "nama" => "Wanda Nugraha",
                "umur" => 15,
                "nrp" => "089676058605",
                "lulus" => true,
                "hobby" => "ngoding php",
                "sekolah" => "SMK ASSALAAM BANDUNG",
                "pembimbing" => [
                    "pembimbing1" => "Onay XL",
                    "pembimbing2" => "Aang L",
                    "pembimbing3" => "Toni M",
                    "pembimbing4" => "Oded S"
                ]
            ],
        ];
        return [$data];
    }

    public function index3()
    // GET
    {
        $data = Contoh3::all();
        return response()->json($data, 200);
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
    // POST
    {
        $siswa = new Contoh3();
        $siswa->nama = $request->nama;
        $siswa->nis = $request->nis;
        $siswa->kelas = $request->kelas;
        $siswa->alamat = $request->alamat;
        $siswa->jurusan = $request->jurusan;
        $siswa->save();
        $response = [
            'success'   => true,
            'data'        => $siswa,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Contoh3::findOrFail($id);
        $response = [
            'success'   => true,
            'data'        => $siswa,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siswa = Contoh3::findOrFail($id);
        $siswa->nama = $request->nama;
        $siswa->nis = $request->nis;
        $siswa->kelas = $request->kelas;
        $siswa->alamat = $request->alamat;
        $siswa->jurusan = $request->jurusan;
        $siswa->save();
        $response = [
            'success'   => true,
            'data'        => $siswa,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Contoh3::findOrFail($id)->delete();
        $response = [
            'success'   => true,
            'data'        => $siswa,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }
}
