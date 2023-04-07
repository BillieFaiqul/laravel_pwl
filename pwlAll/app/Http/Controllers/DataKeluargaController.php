<?php

namespace App\Http\Controllers;

use App\Models\DataKeluarga;
use Illuminate\Http\Request;

class DataKeluargaController extends Controller
{
    //
    public function index()
    {
        $dk = DataKeluarga::all();
        return view('data-keluarga', [
            'dk' => $dk
        ]);
    }


    public function create()
    {
        return view('create_keluarga')
                ->with('url_form',url('/keluarga'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|int|max:20|unique:data_keluargas,id',
            'nama' => 'required|string|max:225',
            'jenis_kelamin' => 'required|string|max:225',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required|string|max:225',
            'pekerjaan' => 'required|string|max:225',
            'status' => 'required|string|max:225'
        ]);

        $data = DataKeluarga::create($request->except(['_token']));
        return redirect('keluarga')->with('success', 'keluarga Berhasil Ditambahkan');
    }
    public function show(DataKeluarga $dataKeluarga)
    {
        //
    }

   
    public function edit($id)
    {
        //
        $keluarga = DataKeluarga::find($id);
        return view('create_keluarga')
            ->with('dk', $keluarga)
            ->with('url_form', url('/keluarga/' . $id));
    }

    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'id' => 'required|int|max:20|unique:data_keluargas,id',
            'nama' => 'required|string|max:225',
            'jenis_kelamin' => 'required|string|max:225',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required|string|max:225',
            'pekerjaan' => 'required|string|max:225',
            'status' => 'required|string|max:225'
        ]);
        $data = DataKeluarga::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('keluarga')
            ->with('succes', 'Data Keluarga Berhasil Ditambahkan');
    }

    
    public function destroy($id)
    {
        DataKeluarga::where('id', '=', $id)->delete();
        return redirect('keluarga')
        ->with('success', 'data keluarga Berhasil Dihapus');
    
    }
}