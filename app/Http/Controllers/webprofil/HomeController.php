<?php

namespace App\Http\Controllers\webprofil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Crypt;
use Alert;

use App\Rules\MatchOldPassword;
use App\Models\Berkas;
use App\Models\Unit;
use App\Models\Visitor;
use App\Models\User;
use App\Models\Gambar;

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
        $berita = Berkas::query()->where('kategori', 'berita')->orderBy('created_at', 'ASC')->limit(5)->get();

        $hariini = Visitor::whereDate('created_at', Carbon::today())->count();
        $bulanini = Visitor::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->count();

        $gambar = Gambar::query()->orderBy('created_at', 'ASC')->limit(5)->get();

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
            'gambar' => $gambar,
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
        $berita = Berkas::query()->where('kategori', 'berita')->orderBy('created_at', 'ASC')->paginate(2);
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

    public function newsdetail($id)
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

    public function hukumkategori($kategori)
    {
        //
        $kat = Crypt::decrypt($kategori);
        $menu = 'manajemen';
        $berkas = Berkas::query()->where('kategori', 'hukumonline')->where('jenis', $kat)->orderBy('created_at', 'ASC')->get();

        $data = [
            'menu' => $menu,
            'berkas' => $berkas,
        ];

        return view('webprofil.penghargaan', $data);
    }

    public function ubahpass($id)
    {
        //
        $userid = Crypt::decrypt($id);
        $menu = 'manajemen';
        $user = User::query()->where('id', $userid)->first();

        $data = [
            'menu' => $menu,
            'user' => $user,
        ];

        return view('webprofil.ubahpass', $data);
    }

    public function passstore(Request $request)
    {
        //
        // $request->validate([
        //     'lama' => ['required', new MatchOldPassword],
        //     'baru' => ['required'],
        //     'konfirmasi' => ['same:baru'],]

        // );

        $this->validate(
            $request,
            [
                'lama' => ['required', new MatchOldPassword],
                'baru' => ['required'],
                'konfirmasi' => ['same:baru'],
            ],
            [
                'konfirmasi.same' => 'Konfirmasi Password Tidak Sama',
            ]
        );

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->baru)]);

        Alert::success('Password Berhasil dirubah');
        return redirect()->back();

        //dd('Password change successfully.');
    }

}
