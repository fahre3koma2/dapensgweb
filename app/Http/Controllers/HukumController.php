<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Crypt;
use Alert;
use File;
use Str;

use App\Models\Berkas;

class HukumController extends Controller
{

    public function index()
    {
        //
        $data['berkas'] = Berkas::query()->where('kategori', 'hukumonline')->orderBy('created_at', 'ASC')->get();
        return view('hukum.index', $data);
    }


    public function create()
    {
        //
        $menu = 'hukum';
        $data = [
            'menu' => $menu,
        ];

        return view('hukum.create', $data);
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
        Berkas::find($id)->increment('views');
    }

    public function edit($id)
    {
        //
        $edit = true;
        $berid = Crypt::decrypt($id);
        $menu = 'manajemen';
        $berkas = Berkas::query()->where('id', $berid)->first();

        $data = [
            'menu' => $menu,
            'berkas' => $berkas,
            'edit' => $edit,
        ];

        return view('hukum.edit', $data);
    }


    public function update(Request $request, $id)
    {
        //
        $data = $request->except('_token');

        $this->validate(
            $request,
            [
                'berkas' => 'mimes:pdf|max:10000'
            ],
            [
                'berkas.mimes' => 'File harus pdf',
                'berkas.max' => 'File tidak boleh lebih dari 10 mb',
            ]
        );

        try {

            $berkas = Berkas::query()->find(decrypt($id));

            if ($request->berkas != null) {
                File::delete('berkasnya/' . $berkas->kategori . '/' . $berkas->file);
                // menyimpan data file yang diupload ke variabel $file
                $file = $request->file('berkas');
                $kategori = $request->kategori;
                $string = Str::random(12);
                $data['file'] = time() . "_" . $kategori . "_" . $string . '.' . $file->getClientOriginalExtension();
                // isi dengan nama folder tempat kemana file diupload
                $tujuan_upload = 'berkasnya/' . $kategori;
                $file->move($tujuan_upload, $data['file']);

                $berkas->update($data);
            }else {
                $data['file'] = $berkas->file;

                $berkas->update($data);
            }
            //$berkas->update($data);
            alert()->success('Berhasil', 'User Berhasil di Update');

            return redirect()->route('hukum.index');
        } catch (Exception $ex) {

            alert()->error('Gagal', 'User gagal di Update');

            return redirect()->back()->withInput();
        }
    }


    public function destroy($id)
    {
        //
    }

}
