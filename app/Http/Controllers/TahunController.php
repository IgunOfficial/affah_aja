<?php

namespace App\Http\Controllers;
use Alert;
use App\Models\Tahun;
use Illuminate\Http\Request;
use Validator;

class TahunController extends Controller
{
    public function index()
    {
        $tahun = Tahun::all();
        return view('admin.tahun.index', compact('tahun'));
    }

    public function create()
    {
        return view('admin.tahun.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tahun' => 'required',
            'periode' => 'required',
            'keterangan' => 'required',
            'status' => 'required',
        ]);

        $tahun = new Tahun();
        $tahun->tahun = $request->tahun;
        $tahun->periode = $request->periode;
        $tahun->keterangan = $request->keterangan;
        $tahun->status = $request->status;
        $tahun->save();
        Alert::success('Done', 'Data berhasil dibuat')->autoClose(2000);
        return redirect()->route('tahun.index');
    }

    public function show($id)
    {
        $tahun = Tahun::findOrFail($id);
        return view('admin.tahun.show', compact('tahun'));
    }

    public function edit($id)
    {
        $tahun = Tahun::findOrFail($id);
        return view('admin.tahun.edit', compact('tahun'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'tahun' => 'required',
            'periode' => 'required',
            'keterangan' => 'required',
            'status' => 'required',
        ]);

        $tahun = Tahun::findOrFail($id);
        $tahun->tahun = $request->tahun;
        $tahun->periode = $request->periode;
        $tahun->keterangan = $request->keterangan;
        $tahun->status = $request->status;
        $tahun->save();
        Alert::success('Done', 'Data berhasil diedit')->autoClose(2000);
        return redirect()->route('tahun.index');
    }

    public function destroy($id)
    {
        $tahun = Tahun::findOrFail($id);
        $tahun->delete();
        return redirect()->route('tahun.index')
        ->with('success', 'Data berhasil dihapus!');
    }
}
