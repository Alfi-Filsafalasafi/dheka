<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use File;

class productController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin/tambah');
    }

    public function store(Request $request){
        $request->validate([
            'berkas' => 'required|file|image|max:2000',
        ]);
        $product = new Product;
        $product->nama = $request->nama;
        $extFile = $request->berkas->getClientOriginalExtension();
        $namaFile =  'produk'.time().".".$extFile;
        $product->gambar = $namaFile;
        $path = $request->berkas->move('img', $namaFile);
        $product->harga = $request->harga;
        $product->save();
        return redirect()->route('home')->with('sukses','Company has been created successfully.');
    }

    public function edit(Product $product) {
        return view('admin.edit',['product' => $product]);
    }

    public function update(Request $request, Product $product){
        

        if($request->berkas == ""){
            $product = Product::find($product->id);
            $product->nama = $request->nama;
            $product->harga = $request->harga;
            $product->save();

        }else{
            $request->validate([
                'berkas' => 'required|file|image|max:2000',
            ]);
            $product = Product::find($product->id);
    	    File::delete('img/'.$product->gambar);
            $product->nama = $request->nama;

            $extFile = $request->berkas->getClientOriginalExtension();
            $namaFile =  'produk'.time().".".$extFile;
            $product->gambar = $namaFile;
            $path = $request->berkas->move('img', $namaFile);
            
            $product->harga = $request->harga;
            $product->save();
        }
        
        return redirect()->route('home')->with('sukses','Company has been created successfully.');

    }

    public function delete($id){
        $product = Product::where('id',$id)->first();
	    File::delete('img/'.$product->gambar);
        Product::where('id', $id)->delete();
        return redirect()->route('home')->with('sukses','Company has been created successfully.');

    }
}
