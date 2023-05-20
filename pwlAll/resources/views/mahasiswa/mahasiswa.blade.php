@extends('layouts.template')
@section('content')
<div class="card-body" style="margin-left: 250px;">

    <a href="{{url('mahasiswa/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Foto</th>
          <th>JK</th>
          <th>HP</th>
          <th>Kelas</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @if($mahasiswa)
          @foreach($paginate as $i => $mhs)
            <tr>
              <td>{{++$i}}</td>
              <td>{{$mhs->nim}}</td>
              <td>{{$mhs->nama}}</td>
              <td><img src="{{ asset('storage/'.$mhs->foto) }}" alt="Foto Mahasiswa" width="100"></td>
              <td>{{$mhs->jk}}</td>
              <td>{{$mhs->hp}}</td>
              <td>{{ $mhs->kelas->nama_kelas }}</td>
              <td>
                <!-- Bikin tombol edit dan delete -->
                <a href="{{ url('/mahasiswa/'. $mhs->id.'/edit') }}" class="btn btn-sm btn-warning">edit</a>

                <form method="POST" action="{{ url('/mahasiswa/'.$mhs->id) }}" >
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                </form>
                <a href="{{ route('showKhs', [$mhs->id]) }}" class="btn btn-sm btn-primary">nilai</a>
              </td>
            </tr>
          @endforeach
        @else
          <tr><td colspan="6" class="text-center">Data tidak ada</td></tr>
        @endif
      </tbody>
    </table>
    <div class="row">
      <div class="col-md-12">
          {{ $paginate->links() }}
      </div>
</div>
  </div>
  <!-- /.card-body -->
@endsection