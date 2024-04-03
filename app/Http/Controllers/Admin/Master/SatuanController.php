<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Master\Satuan\CreateSatuanRequest;
use App\Http\Requests\Admin\Master\Satuan\UpdateSatuanRequest;
use App\Models\Satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $satuans = Satuan::withTrashed()->get();
        $master_acc = 'here show';
        $satuan_menu = 'active';
        return view('admin.master.satuan.index',compact('satuans','master_acc','satuan_menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $master_acc = 'here show';
        $satuan_menu = 'active';
        return view('admin.master.satuan.create',compact('master_acc','satuan_menu'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateSatuanRequest $request)
    {
        //
        $satuans = $request->validated();
        Satuan::insert($satuans);
        return redirect()->route('admin.master.satuan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $master_acc = 'here show';
        $satuan_menu = 'active';
        $satuan = Satuan::findOrFail($id);
        return view('admin.master.satuan.show', compact('master_acc','satuan_menu','satuan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $master_acc = 'here show';
        $satuan_menu = 'active';
        $satuan = Satuan::findOrFail($id);
        return view('admin.master.satuan.edit', compact('master_acc','satuan_menu','satuan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSatuanRequest $request, string $id)
    {
        //
        $satuan = $request->validated();
        Satuan::findOrFail($id)->update($satuan);
        return redirect()->route('admin.master.satuan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $satuan = Satuan::findOrFail($id)->delete();
        return redirect()->route('admin.master.satuan.index');
    }

    public function restore(string $id)
    {
        //
        $satuan = Satuan::withTrashed()->find($id);
        $satuan->restore();
        return redirect()->route('admin.master.satuan.index');

    }
}
