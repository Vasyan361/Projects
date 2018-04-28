<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{

    public function index()
    {
        $albums = Album::orderBy('year', 'asc')->get();

        return view('albums.albums', compact('albums'));
    }

    public function show(Album $album)
    {

        return view('albums.album', compact('album'));
    }

}
