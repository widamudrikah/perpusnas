<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    // menampilkan data
    public function index() {
        $categories = Categories::all();

        return view('admin.category.index', compact('categories'));
    }

    // Menambahkan data kategori
    public function store(Request $request) {
        // dd($request->all());

        // validasi apakah datanya benar dan sesuai harapan
        $request->validate([
            'name'  => 'required|string|max:225'
        ]);

        // proses menyimpan dalam data base
        Categories::create([
            'name'  => $request->name,
            'slug'  => Str::slug($request->name)
        ]);
        return back()->with('success', 'Kategori berhasil ditambahkan');
    }

    // update data
    public function update(Request $request, $id) {
        // validasi apakah datanya benar dan sesuai harapan
        $request->validate([
            'name'  => 'required|string|max:225'
        ]);

        // pengecekan id, apakah datanya ada atau tidak
        $categori = Categories::findOrFail($id);

        // perubahan dlam database
        $categori->update([
            'name'  => $request->name,
            'slug'  => Str::slug($request->name)
        ]);

        return back()->with('success', 'Kategori berhasil diubah');
    }

    // Hapus kategori
    public function destroy($id) {
        // cek data
        $category = Categories::findOrFail($id);
        // menghapus data
        $category->delete();

        return back()->with('success', 'Kategori berhasil dihapus');

    }
}
