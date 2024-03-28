<?php

namespace App\Http\Controllers\Admin\Transaksi;

use App\Models\Armada;
use Illuminate\Http\Request;
use App\Models\PemakaianSparepart;
use App\Http\Controllers\Controller;

class PemakaianSparepartController extends Controller
{
    //
    public function index()
    {
        //
        $pemakaians = PemakaianSparepart::withTrashed()->get();
        $transaksi_acc = 'here show';
        $pemakaian_menu = 'active';
        return view('admin.transaksi.pemakaian.index',compact('pemakaians','transaksi_acc','pemakaian_menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        //
        $transaksi_acc = 'here show';
        $pemakaian_menu = 'active';
        $armada = Armada::findorFail($id);
        return view('admin.transaksi.pemakaian.create', compact('transaksi_acc', 'pemakaian_menu','armada'));
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
