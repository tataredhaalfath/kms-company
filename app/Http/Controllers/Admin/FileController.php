<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        $images = Image::orderBy('id', 'DESC')->get();
        return view('pages.admin.file.index', compact('images'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
        ]);

        $data = $request->all();
        // upload image
        $data['image'] = $request->file('image')->store('img', 'public');

        Image::create($data);
        return redirect(route('image.index'))->with('status', 'Data gambar berhasil ditambahkan');
    }

    public function destroy(Request $request)
    {
        $image = Image::findOrFail($request->id);
        unlink(public_path('storage/' . $image->image));
        $image->delete();

        return redirect(route('image.index'))->with('status', 'Data gambar berhasil dihapus');
    }
}
