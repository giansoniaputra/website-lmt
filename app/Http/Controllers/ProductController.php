<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.index', [
            'title' => 'Product'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'jenis' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'photo' => 'required|file|image|mimes:jpg,jpeg,png',
        ];
        $pesan = [
            'judul.required' => 'Judul tidak boleh kosong!',
            'jenis.required' => 'Jenis tidak boleh kosong!',
            'stok.required' => 'Stok tidak boleh kosong!',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong!',
            'photo.required' => 'Photo tidak boleh kosong!',
            'photo.image' => 'Format gambar tidak valid!',
            'photo.mimes' => 'Format gambar harus JPG/JPEG/PNG!',
        ];
        $validator = Validator::make($request->all(), $rules, $pesan);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()])->setStatusCode(400);
        } else {
            $product = new Product($request->all());
            $product->uuid = Str::orderedUuid();
            $product->photo = $request->file('photo')->store('photo');
            $product->save();
            return response()->json(['success' => 'Product Berhasil Ditambahkan!']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return response()->json(['data' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'judul' => 'required',
            'jenis' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
        ];
        $pesan = [
            'judul.required' => 'Judul tidak boleh kosong!',
            'jenis.required' => 'Jenis tidak boleh kosong!',
            'stok.required' => 'Stok tidak boleh kosong!',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong!',
        ];
        if ($request->file('photo')) {
            $rules['photo'] = 'file|image|mimes:jpg,jpeg,png';
            $pesan['photo.image'] = 'Format gambar tidak valid!';
            $pesan['photo.mimes'] = 'Format gambar harus JPG/JPEG/PNG!';
        }
        $validator = Validator::make($request->all(), $rules, $pesan);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()])->setStatusCode(400);
        } else {
            $oldPhoto = $product->photo;
            $product->fill($request->all());
            if ($request->file('photo')) {
                Storage::delete($oldPhoto);
                $product->photo = $request->file('photo')->store('photo');
            }
            $product->save();
            return response()->json(['success' => 'Product Berhasil Diubah!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Storage::delete($product->photo);
        Product::destroy($product->id);
        return response()->json(['success' => 'Product Berhasil Dihapus!']);
    }

    public function dataTables(Request $request)
    {
        $query = Product::all();
        return DataTables::of($query)->addColumn('action', function ($row) {
            $actionBtn =
                '
    <div class="d-flex justify-content-center gap-1">
    <button class="btn btn-rounded btn-sm btn-warning text-dark edit-button" title="Edit Data" data-uuid="' . $row->uuid . '"><i class="ri-edit-2-line"></i></button>
    <button class="btn btn-rounded btn-sm btn-danger text-white delete-button" title="Hapus Data" data-uuid="' . $row->uuid . '" data-token="' . csrf_token() . '"><i class="ri-delete-bin-line"></i></button>
    </div>';
            return $actionBtn;
        })->make(true);
    }
}
