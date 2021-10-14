<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Crypt;
use Alert;
use File;
use Str;

use App\Models\Gambar;

class GambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['berkas'] = Gambar::query()->orderBy('created_at', 'ASC')->get();
        return view('gambar.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $menu = 'gambar';
        $data = [
            'menu' => $menu,
        ];

        return view('gambar.create', $data);
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
                'berkas' => 'required|mimes:jpg,png,jpeg|max:5000'
            ],
            [
                'berkas.required' => 'Tidak ada file yang di upload',
                'berkas.mimes' => 'File harus Gambar',
                'berkas.max' => 'File tidak boleh lebih dari 5 mb',
            ]
        );

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('berkas');
        $slide = $request->slide;
        $string = Str::random(12);

        $nama_file = time() . "_" . $slide . "_" . $string . '.' . $file->getClientOriginalExtension();

        // isi dengan nama folder tempat kemana file diupload

        $tujuan_upload = 'berkasnya/gambar/';
        $file->move($tujuan_upload, $nama_file);

        Gambar::create([
            'file' => $nama_file,
            'jenis' => $slide,
        ]);

        alert()->success(
            'Berhasil',
            'Berkas ' . $slide . 'berhasil di tambahkan'
        );

        return redirect()->route('gambar.index');

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
        $berkasnya = Gambar::where('id', decrypt($id))->first();

        File::delete('berkasnya/gambarnya/' . $berkasnya->file);

        Gambar::where('id', decrypt($id))->delete();

        return redirect()->route('gambar.index');
    }
}
