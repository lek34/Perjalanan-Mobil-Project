<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Master\Rekening\CreateRekeningRequest;
use App\Http\Requests\Admin\Master\Rekening\UpdateRekeningRequest;
use App\Models\Rekening;
use Illuminate\Http\Request;

class RekeningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rekenings = Rekening::withTrashed()->get();
        $master_acc = 'here show';
        $rekening_menu = 'active';
        return view('admin.master.rekening.index',compact('rekenings','master_acc','rekening_menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $master_acc = 'here show';
        $rekening_menu = 'active';
        return view('admin.master.rekening.create',compact('master_acc','rekening_menu'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRekeningRequest $request)
    {
        //
        $rekenings = $request->validated();
        Rekening::insert($rekenings);
        return redirect()->route('admin.master.rekening.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $master_acc = 'here show';
        $rekening_menu = 'active';
        $rekening = Rekening::findOrFail($id);
        return view('admin.master.rekening.show', compact('master_acc','rekening_menu','rekening'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $master_acc = 'here show';
        $rekening_menu = 'active';
        $rekening = Rekening::findOrFail($id);
        return view('admin.master.rekening.edit', compact('master_acc','rekening_menu','rekening'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRekeningRequest $request, string $id)
    {
        //
        $rekening = $request->validated();
        Rekening::findOrFail($id)->update($rekening);
        return redirect()->route('admin.master.rekening.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $rekening = Rekening::findOrFail($id)->delete();
        return redirect()->route('admin.master.rekening.index');
    }

    public function restore(string $id)
    {
        //
        $rekening = Rekening::withTrashed()->find($id);
        $rekening->restore();
        return redirect()->route('admin.master.rekening.index');

    }
}
