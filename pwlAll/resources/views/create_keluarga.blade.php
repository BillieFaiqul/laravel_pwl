@extends('layouts.template')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1></h1>
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
        <form method="POST" action="{{ $url_form }}">
            @csrf
            {!! (isset($dk))? method_field('PUT') : '' !!}

            <div class="form-gorup">
                <label>id</label>
                <input class="form-control @error('id') is-invalid @enderror" value="{{ isset($dk)? $dk->id : old('id') }}" name="id" type="text">
                @error('id')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-gorup">
                <label>Nama</label>
                <input class="form-control @error('nama') is-invalid @enderror" value="{{ isset($dk)? $dk->nama : old('nama') }}" name="nama" type="text">
                @error('nama')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-gorup">
                <label>Jenis Kelamin</label>
                <input class="form-control @error('jenis_kelamin') is-invalid @enderror" value="{{ isset($dk)? $dk->jenis_kelamin : old('jenis_kelamin') }}" name="jenis_kelamin" type="text">
                @error('jenis_kelamin')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-gorup">
                <label>Tanggal Lahir</label>
                <input class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ isset($dk)? $dk->tanggal_lahir : old('tanggal_lahir') }}" name="tanggal_lahir" type="date">
                @error('tanggal_lahir')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-gorup">
                <label>Agama</label>
                <input class="form-control @error('agama') is-invalid @enderror" value="{{ isset($dk)? $dk->agama : old('agama') }}" name="agama" type="text">
                @error('agama')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-gorup">
                <label>Pekerjaan</label>
                <input class="form-control @error('pekerjaan') is-invalid @enderror" value="{{ isset($dk)? $dk->pekerjaan : old('pekerjaan') }}" name="pekerjaan" type="text" >
                @error('pekerjaan')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-gorup">
                <label>Status</label>
                <input class="form-control @error('status') is-invalid @enderror" value="{{ isset($dk)? $dk->status : old('status') }}" name="status" type="text">
                @error('status')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-sm btn-success my-2">Submit</button>
        </form>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        
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