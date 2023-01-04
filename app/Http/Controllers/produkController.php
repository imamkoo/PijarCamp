<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = produk::all();
        return view('home.welcome', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new produk();

        $fileT = $request->thumbnail;
        $filename = time() . '.' . $fileT->getClientOriginalExtension();
        $request->thumbnail->move('thumbnail', $filename);
        $data->thumbnail = $filename;

        $data->nama_produk = $request->nama_produk;
        $data->keterangan = $request->keterangan;
        $data->harga = $request->harga;
        $data->jumlah = $request->jumlah;
        $data->save();

        return redirect()->back()->with('success', 'Produk Uploaded!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = produk::find($id);

        return view('show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editThumbnail($id)
    {
        $data = produk::find($id);
        return view('editThumbnail', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateThumbnail(Request $request, $id)
    {

        $cek = produk::find($id);

        if ($request->hasFile('thumbnail')) {

            $path = (public_path('thumbnail') . "/" . $cek->thumbnail);
            if (File::exists($path)) {
                File::delete($path);
            }

            $foto_file = $request->file('thumbnail');
            $foto_ekstensi = $foto_file->extension();
            $foto_baru = date('ymdhis') . ".$foto_ekstensi";
            $foto_file->move(public_path('thumbnail'), $foto_baru);
        }

        $data = [
            'nama_produk' => $request->nama_produk,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'thumbnail' => $foto_baru,
        ];

        produk::where('id', $id)->update($data);

        return redirect()->back()->with('success', 'Thumbnail Updated!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cek = produk::find($id);
        $image_path = public_path('thumbnail') . "/" . $cek->thumbnail;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }

        produk::where('id', $id)->delete();
        return redirect('/')->with('delete', 'Produk Deleted!');
    }
}