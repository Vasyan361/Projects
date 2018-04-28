<?php

namespace App\Http\Controllers;

use App\Album;
use App\Http\Requests\StoreAlbum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminAlbumsController extends Controller // контроллер ресурсов
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $albums = Album::orderBy('year', 'asc')->get();

        return view('admin.albums.index', compact('albums'));
    }


    public function create()
    {
        return view('admin.albums.create');
    }


    public function store(StoreAlbum $request) // используется Form Request
    {
        Album::create([
            'title' => $request->title,
            'year' => $request->year,
            'code' => $request->code
        ]);

        return redirect('/admin/albums');
    }

    public function edit($id)
    {
        $album = Album::find($id);

        return view('admin.albums.create', compact('album'));
    }

    public function update(StoreAlbum $request, $id) //// используется Form Request
    {
        Album::where('id', $id)
            ->update([
                'title' => $request->title,
                'year' => $request->year,
                'code' => $request->code
            ]);

        return redirect('/admin/albums');
    }

    public function destroy($id)
    {
        Album::destroy($id);

        return back();
    }
}
