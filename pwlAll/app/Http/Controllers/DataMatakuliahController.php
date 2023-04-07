<?php

namespace App\Http\Controllers;

use App\Models\DataMatakuliah;
use Illuminate\Http\Request;

class DataMatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mk = DataMatakuliah::all();
        return view('data-matakuliah', [
            'mk' => $mk
        ]);
    }


    public function create()
    {
        return view('create_matakuliah')
                ->with('url_form',url('/matakuliah'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|int|max:20|unique:data_mata_kulias,id',
            'nama_matakuliah' => 'required|string|max:225',
            'hari' => 'required|string|max:225'
        ]);

        $data = DataMatakuliah::create($request->except(['_token']));
        return redirect('matakuliah')->with('success', 'hobi Berhasil Ditambahkan');
    }
    public function show(DataMatakuliah $dataMataKuliak)
    {
        //
    }

   
    public function edit($id)
    {
        //
        $matakuliah = DataMatakuliah::find($id);
        return view('create_matakuliah')
            ->with('mk', $matakuliah)
            ->with('url_form', url('/matakuliah/' . $id));
    }

    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'id' => 'required|int|max:20|unique:data_mata_kulias,id',
            'nama_matakuliah' => 'required|string|max:225',
            'hari' => 'required|string|max:225'
        ]);
        $data = DataMatakuliah::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('matakuliah')
            ->with('succes', 'Matakuliah Berhasil Ditambahkan');
    }

    
    public function destroy($id)
    {
        DataMatakuliah::where('id', '=', $id)->delete();
        return redirect('matakuliah')
        ->with('success', 'matakuliah Berhasil Dihapus');
    
    }
}
