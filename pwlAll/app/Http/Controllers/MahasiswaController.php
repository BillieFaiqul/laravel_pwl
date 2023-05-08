<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Kelas;
use App\Models\MahasiswaMatakuliah;
use Illuminate\Http\Request;
use PDO;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::with('kelas')->get();
        $paginate = Mahasiswa:: orderBy('id', 'asc')->paginate(3);
        return view('mahasiswa.mahasiswa', [
            'mahasiswa' => $mahasiswa,
            'paginate' => $paginate
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('mahasiswa.create_mahasiswa', [
            'url_form' => url('/mahasiswa'),
            'kelas' => $kelas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswa,nim',
            'nama' => 'required|string|max:50',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'hp' => 'required|digits_between:6,15',
        ]);

        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = $request->get('nim');
        $mahasiswa->nama = $request->get('nama');
        $mahasiswa->jk = $request->get('jk');
        $mahasiswa->tempat_lahir = $request->get('tempat_lahir');
        $mahasiswa->tanggal_lahir = $request->get('tanggal_lahir');
        $mahasiswa->alamat = $request->get('alamat');
        $mahasiswa->hp = $request->get('hp');

        $kelas = new Kelas;
        $kelas->id = $request->get('kelas');

        $mahasiswa->kelas()->associate($kelas);
        $mahasiswa->save();

        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        
    }

    public function showKhs($id){
        
        $mahasiswa = Mahasiswa::where('id', $id)->first();
        $khs = MahasiswaMatakuliah::with('mahasiswa', 'matakuliah')->where('mahasiswa_id', $id)->get();
        return view('mahasiswa.khs', [
            'mahasiswa' => $mahasiswa,
            'khs' => $khs
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::with('kelas')->find($id);
        $kelas = Kelas::all();
        return view('mahasiswa.create_mahasiswa', [
            'mhs' => $mahasiswa,
            'kelas' => $kelas,
            'url_form' => url('/mahasiswa/' . $id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswa,nim,'.$id,
            'nama' => 'required|string|max:50',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'hp' => 'required|digits_between:6,15'
        ]);

        $mahasiswa = Mahasiswa::with('kelas')->find($id);
        $mahasiswa->nim = $request->get('nim');
        $mahasiswa->nama = $request->get('nama');
        $mahasiswa->jk = $request->get('jk');
        $mahasiswa->tempat_lahir = $request->get('tempat_lahir');
        $mahasiswa->tanggal_lahir = $request->get('tanggal_lahir');
        $mahasiswa->alamat = $request->get('alamat');
        $mahasiswa->hp = $request->get('hp');

        $kelas = new Kelas;
        $kelas->id = $request->get('kelas');

        $mahasiswa->kelas()->associate($kelas);
        $mahasiswa->save();

        return redirect('mahasiswa')->with('success', 'Mahasiswa Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mahasiswa::where('id', '=', $id)->delete();
        return redirect('mahasiswa')->with('success', 'Mahasiswa Berhasil Dihapus');
    }
}