<?php

namespace App\Http\Controllers\Admin\Master;

use App\Models\Pembelian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sparepart;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pembelians = Pembelian::withTrashed()->get();
        $transaksi_acc = 'here show';
        $pembelian_menu = 'active';
        return view('admin.transaksi.pembelian.index',compact('pembelians','transaksi_acc','pembelian_menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $transaksi_acc = 'here show';
        $pembelian_menu = 'active';
        $spareparts = Sparepart::all();
        return view('admin.transaksi.pembelian.create',compact('spareparts','transaksi_acc','pembelian_menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
