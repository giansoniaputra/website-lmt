<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
            'janis' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'photo' => 'required|files|image|mimes:jpg,jpeg,png',
        ];
        $pesan = [
            'judul.required' => 'Judul tidak boleh kosong!',
            'janis.required' => 'Jenis tidak boleh kosong!',
            'stok.required' => 'Stok tidak boleh kosong!',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong!',
            'photo.required' => 'Photo tidak boleh kosong!',
            'photo.image' => 'Format gambar tidak valid!',
            'photo.mimes' => 'Format gambar harus JPG/JPEG/PNG!',
        ];
        $validator = Validator::make($request->all(), $rules, $pesan);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()])->setStatusCode(400);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
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
