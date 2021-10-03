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
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

}
