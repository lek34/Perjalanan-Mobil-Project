<?php

namespace App\Http\Controllers\Admin\Transaksi;

use App\Http\Controllers\Controller;
use App\Models\PemakaianSparepart;
use Illuminate\Http\Request;

class PemakaianSparepartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
    public function create()
    {
        //
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
