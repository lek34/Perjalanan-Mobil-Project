<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Master\Spareparts\CreateSparepartRequest;
use App\Http\Requests\Admin\Master\Spareparts\UpdateSparepartRequest;
use App\Models\Sparepart;
use Illuminate\Http\Request;

class SparepartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $spareparts = Sparepart::withTrashed()->get();
        $master_acc = 'here show';
        $sparepart_menu = 'active';
        return view('admin.master.sparepart.index',compact('spareparts','master_acc','sparepart_menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $master_acc = 'here show';
        $sparepart_menu = 'active';
        return view('admin.master.sparepart.create',compact('master_acc','sparepart_menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateSparepartRequest $request)
    {
        //
        $spareparts = $request->validated();
        Sparepart::insert($spareparts);
        return redirect()->route('admin.master.sparepart.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $master_acc = 'here show';
        $sparepart_menu = 'active';
        $sparepart = Sparepart::findOrFail($id);
        return view('admin.master.sparepart.show', compact('master_acc','sparepart_menu','sparepart'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $master_acc = 'here show';
        $sparepart_menu = 'active';
        $sparepart = Sparepart::findOrFail($id);
        return view('admin.master.sparepart.edit', compact('master_acc','sparepart_menu','sparepart'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSparepartRequest $request, string $id)
    {
        //
        $sparepart = $request->validated();
        Sparepart::findOrFail($id)->update($sparepart);
        return redirect()->route('admin.master.sparepart.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $sparepart = Sparepart::findOrFail($id)->delete();
        return redirect()->route('admin.master.sparepart.index');
    }

    public function restore(string $id)
    {
        //
        $sparepart = Sparepart::withTrashed()->find($id);
        $sparepart->restore();
        return redirect()->route('admin.master.sparepart.index');

    }
}
