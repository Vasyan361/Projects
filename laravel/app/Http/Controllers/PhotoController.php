<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        $photo = Photo::all();

        return view('photos.index', compact('photo'));
    }

    public function show(Photo $photo)
    {
        return view('photos.show', compact('photo'));
    }
}
