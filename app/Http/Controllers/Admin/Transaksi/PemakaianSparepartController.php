<?php

namespace App\Http\Controllers\Admin\Transaksi;

use App\Models\Armada;
use App\Models\Sparepart;
use Illuminate\Http\Request;
use App\Models\PemakaianSparepart;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Transaksi\CreatePemakaianSparepartRequest;
use App\Models\DetailPemakaianSparepart;

class PemakaianSparepartController extends Controller
{
    //
    public function index(string $id)
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
        $sparepart = Sparepart::all();
        return view('admin.transaksi.pemakaian.create', compact('transaksi_acc', 'pemakaian_menu','armada', 'sparepart'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePemakaianSparepartRequest $request)
    {
        //
        $pemakaianspareparts = $request->validated();
        $index = $pemakaianspareparts['armada_id'];
        // $pembelian = PembelianBarang::insert($pembelianbarang);
        $pemakaianHeader = PemakaianSparepart::create([
            'tanggal'=> $pemakaianspareparts['tanggal'],
            'norek'=> $pemakaianspareparts['norek'],
            'nobon'=> $pemakaianspareparts['nobon'],
            'armada_id'=> $pemakaianspareparts['armada_id'],
            'namamekanik'=> $pemakaianspareparts['namamekanik'],
            'status'=> $pemakaianspareparts['status'],
            'keterangan'=> $pemakaianspareparts['keterangan']
        ]);

        $pemakaianId = $pemakaianHeader->id;

        $tableData = json_decode($pemakaianspareparts['tableData']);
        foreach($tableData as $table){
            DetailPemakaianSparepart::create([
                'pemakaian_sparepart_id' => $pemakaianId,
                'sparepart_id' => $table->id,
                'asal' => $table->Asal,
                'qty' => $table->QTY,
                'uom' => $table->Satuan,
                'harga' => $table->Harga,
            ]);
        }
        return redirect()->route('admin.transaksi.pemakaian.index',$index);
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
