<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Berkas;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['berkas'] = Berkas::query()->where('kategori', 'berita')->orderBy('created_at', 'ASC')->get();
        return view('berita.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $menu = 'hukum';
        $data = [
            'menu' => $menu,
        ];

        return view('berita.create', $data);
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
        $this->validate(
            $request,
            [
                'berkas' => 'required|mimes:jpeg,png,jpg|max:5000'
            ],
            [
                'berkas.required' => 'Tidak ada file yang di upload',
                'berkas.mimes' => 'File harus gambar format png/jpg',
                'berkas.max' => 'File tidak boleh lebih dari 10 mb',
            ]
        );

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('berkas');
        $perihal = $request->perihal;
        $kategori = $request->kategori;

        $nama_file = time() . "_" . $perihal . '.' . $file->getClientOriginalExtension();

        // isi dengan nama folder tempat kemana file diupload

        $tujuan_upload = 'berkasnya/' . $kategori;
        $file->move($tujuan_upload, $nama_file);

        Berkas::create([
            'no_dokumen' => $request->no_dok,
            'perihal' => $perihal,
            'file' => $nama_file,
            'kategori' => $kategori,
            'keterangan' => $request->keterangan,
            'views' => 0,
            'create_by' => auth()->user()->name,
        ]);

        alert()->success(
            'Berhasil',
            'Berkas ' . $kategori . 'berhasil di tambahkan'
        );

        return redirect()->route('berita.index');
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
