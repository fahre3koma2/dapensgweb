<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Berkas;
use File;
use Str;

class BerkasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

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
        //dd($request->all());
        $this->validate($request,
            [
                'berkas' => 'required|mimes:pdf|max:10000'
            ],
            [
                'berkas.required' => 'Tidak ada file yang di upload',
                'berkas.mimes' => 'File harus pdf',
                'berkas.max' => 'File tidak boleh lebih dari 10 mb',
            ]
        );

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('berkas');
        $perihal = $request->perihal;
        $kategori = $request->kategori;
        $string = Str::random(12);

        $nama_file = time() . "_" . $kategori . "_" . $string . '.' . $file->getClientOriginalExtension();

        // isi dengan nama folder tempat kemana file diupload

        $tujuan_upload = 'berkasnya/'.$kategori;
        $file->move($tujuan_upload, $nama_file);

        Berkas::create([
            'no_dokumen' => $request->no_dok,
            'perihal' => $perihal,
            'file' => $nama_file,
            'kategori' => $kategori,
            'keterangan' => $request->keterangan,
            'jenis' => $request->jenis,
            'views' => 0,
            'create_by' => auth()->user()->name,
        ]);

        alert()->success('Berhasil',
            'Berkas '. $kategori .'berhasil di tambahkan'
        );

        if($kategori == 'hukumonline'){
            return redirect()->route('hukum.index');
        }else{
            return redirect()->back();
        }

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
        // hapus file
        $berkasnya = Berkas::where('id', decrypt($id))->first();
        $kategori = $berkasnya->kategori;
        //dd($kategori);
        File::delete('berkasnya/'. $berkasnya->kategori .'/'. $berkasnya->file);

        if($kategori == 'berita'){
            File::delete('berkasnya/' . $berkasnya->kategori . '/thumbnails/' . $berkasnya->file);
        }
        // hapus data
        Berkas::where('id', decrypt($id))->delete();

        if ($kategori == 'hukumonline') {
            return redirect()->route('hukum.index');
        } elseif ($kategori == 'berita') {
            return redirect()->route('berita.index');
        } else {
            return redirect()->back();
        }
    }
}
