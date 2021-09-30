<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function about()
    {
        //
        return view('webprofil.about');
    }

    public function manajemen()
    {
        //
        return view('webprofil.manajemen');
    }

    public function penghargaan()
    {
        //
        return view('webprofil.penghargaan');
    }

    public function struktur()
    {
        //
        return view('webprofil.struktur');
    }

    public function kontak()
    {
        //
        return view('webprofil.kontak');
    }
}
