@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Keluarga</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Keluarga</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Keluarga</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">

          <a href="{{url('keluarga/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>

          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Agama</th>
                <th>Pekerjaan</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @if($dk->count() > 0)
                @foreach($dk as $i => $k)
                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$k->nama}}</td>
                    <td>{{$k->jenis_kelamin}}</td>
                    <td>{{$k->tanggal_lahir}}</td>
                    <td>{{$k->agama}}</td>
                    <td>{{$k->pekerjaan}}</td>
                    <td>{{$k->status}}</td>
                    <td>
                      <!-- Bikin tombol edit dan delete -->
                      <a href="{{ url('/keluarga/'. $k->id.'/edit') }}" class="btn btn-sm btn-warning">edit</a>

                      <form method="POST" action="{{ url('/keluarga/'.$k->id) }}" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              @else
                <tr><td colspan="6" class="text-center">Data tidak ada</td></tr>
              @endif
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
@endsection
@push('custom_js')
    <script>
        
    </script>
@endpush