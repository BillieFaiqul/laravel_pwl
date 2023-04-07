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
        <h3 class="card-title">MataKuliah</h3>

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
            {!! (isset($mk))? method_field('PUT') : '' !!}

            <div class="form-gorup">
                <label>id</label>
                <input class="form-control @error('id') is-invalid @enderror" value="{{ isset($mk)? $mk->id : old('id') }}" name="id" type="text">
                @error('id')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-gorup">
                <label>MataKuliah</label>
                <input class="form-control @error('nama_matakuliah') is-invalid @enderror" value="{{ isset($mk)? $mk->nama_matakuliah : old('nama_matakuliah') }}" name="nama_matakuliah" type="text">
                @error('nama_matakuliah')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-gorup">
                <label>Hari</label>
                <input class="form-control @error('hari') is-invalid @enderror" value="{{ isset($mk)? $mk->hari : old('hari') }}" name="hari" type="text">
                @error('hari')
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