<?php

namespace App\Http\Controllers\Admin\Master;

use App\Models\Armada;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Master\Armada\CreateArmadaRequest;

class ArmadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $armadas = Armada::withTrashed()->get();
        $master_acc = 'here show';
        $armada_menu = 'active';
        return view('admin.master.armada.index',compact('armadas','master_acc','armada_menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $master_acc = 'here show';
        $armada_menu = 'active';
        return view('admin.master.armada.create',compact('master_acc','armada_menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateArmadaRequest $request)
    {
        //
        $armada = $request->validated();
        Armada::insert($armada);
        return redirect()->route('admin.master.armada.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $master_acc = 'here show';
        $armada_menu = 'active';
        $armada = Armada::findOrFail($id);
        return view('admin.master.armada.show', compact('master_acc','armada_menu','armada'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $master_acc = 'here show';
        $armada_menu = 'active';
        $armada = Armada::findOrFail($id);
        return view('admin.master.armada.edit', compact('master_acc','armada_menu','armada'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $armada = $request->validated();
        Armada::findOrFail($id)->update($armada);
        return redirect()->route('admin.master.armada.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $armada = Armada::findOrFail($id)->delete();
        return redirect()->route('admin.master.barang.index');
    }
}
