<?php

namespace App\Http\Controllers\Admin\Transaksi;

use App\Models\Armada;
use App\Models\Perjalanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PerjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $perjalanans = Perjalanan::withTrashed()->get();
        $transaksi_acc = 'here show';
        $pemakaian_menu = 'active';
        return view('admin.transaksi.perjalanan.index',compact('perjalanans','transaksi_acc','perjalanan_menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        //
        $transaksi_acc = 'here show';
        $perjalanan_menu = 'active';
        $armada = Armada::findorFail($id);
        return view('admin.transaksi.perjalanan.create', compact('transaksi_acc', 'perjalanan_menu','armada',));
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
