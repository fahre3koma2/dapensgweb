<?php

namespace App\Http\Controllers\webprofil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use App\Models\Berkas;
use App\Models\Unit;
use App\Models\Visitor;

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

        //dd(Auth::user());

        $viewrs = Berkas::sum('views');
        $berita = Berkas::query()->where('kategori', 'berita')->orderBy('created_at', 'ASC')->get();

        $hariini = Visitor::whereDate('created_at', Carbon::today())->count();
        $bulanini = Visitor::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->count();

        $semua = DB::table('unit')
        ->where('unit.nama', '!=', 'Administrator')
        ->leftJoin('visitor', 'visitor.unit_user', '=', 'unit.id')
        ->select('unit.nama', \DB::raw('COUNT(visitor.id) as jum'))
        ->groupBy('unit.nama')
        ->get();

        //dd($semua);

        $menu = 'home';
        $data = [
            'menu' => $menu,
            'viewrs' => $viewrs,
            'berita' => $berita,
            'semua' => $semua,
            'hariini' => $hariini,
            'bulanini' => $bulanini,
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
        $berita = Berkas::query()->where('kategori', 'berita')->orderBy('created_at', 'ASC')->get();
        $baru = Berkas::query()->where('kategori', 'berita')->orderBy('created_at', 'desc')->first();

        $data = [
            'menu' => $menu,
            'berita' => $berita,
            'baru' => $baru,
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

    public function beritadetail($id)
    {
        //
        $menu = 'manajemen';
        $reqId = Crypt::decrypt($id);
        $berita = Berkas::query()->where('id', $reqId)->get()->first();

        $list = Berkas::where('kategori', 'berita')->inRandomOrder()->limit(3)->get();

        $data = [
            'menu' => $menu,
            'berita' => $berita,
            'list' => $list,
        ];

        return view('webprofil.beritadetail', $data);
    }
}
