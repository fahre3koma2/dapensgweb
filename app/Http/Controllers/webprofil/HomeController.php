<?php

namespace App\Http\Controllers\webprofil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Berkas;

class HomeController extends Controller
{

    public function index()
    {
        //
        return view('webprofil.index');
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

    public function home()
    {
        //
        $viewrs = Berkas::sum('views');
        $berita = Berkas::query()->where('kategori', 'berita')->orderBy('created_at', 'ASC')->get();

        $menu = 'home';
        $data = [
            'menu' => $menu,
            'viewrs' => $viewrs,
            'berita' => $berita,
        ];

        return view('webprofil.index', $data);
    }

    public function about()
    {
        //
        $menu = 'about';
        $data = [
            'menu' => $menu,
        ];

        return view('webprofil.about', $data);
    }

    public function manajemen()
    {
        //
        $menu = 'manajemen';
        $data = [
            'menu' => $menu,
        ];
        return view('webprofil.manajemen', $data);
    }

    public function penghargaan()
    {
        //
        $menu = 'penghargaan';
        $berkas = Berkas::query()->where('kategori', 'hukumonline')->orderBy('created_at', 'ASC')->get();

        $data = [
            'menu' => $menu,
            'berkas' => $berkas,
        ];
        return view('webprofil.penghargaan', $data);
    }

    public function struktur()
    {
        //
        $menu = 'struktur';
        $data = [
            'menu' => $menu,
        ];
        return view('webprofil.struktur', $data);
    }

    public function kontak()
    {
        //
        $menu = 'kontak';
        $data = [
            'menu' => $menu,
        ];
        return view('webprofil.kontak', $data);
    }
}
