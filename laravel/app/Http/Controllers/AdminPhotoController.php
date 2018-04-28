<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $photo = Photo::all();

        return view('admin.photos.index', compact('photo'));
    }

    public function create()
    {
        return view('admin.photos.create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {

            $path = $request->file('image')->store('/public/images');
            $url = Storage::url($path);

            Photo::create([
                'url' => $url,
                'path' => $path
            ]);

            return redirect('/admin/photos');

        } else {

            return back();

        }

    }

    public function destroy($id)
    {
        $photo = Photo::find($id);
        Storage::delete(str_replace('public/photos/', '', $photo->path));
        $photo->delete();

        return back();
    }
}
