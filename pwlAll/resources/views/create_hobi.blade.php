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
        <h3 class="card-title">Hobi</h3>

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
            {!! (isset($hb))? method_field('PUT') : '' !!}

            <div class="form-gorup">
                <label>id</label>
                <input class="form-control @error('id') is-invalid @enderror" value="{{ isset($hb)? $hb->id : old('id') }}" name="id" type="text">
                @error('id')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-gorup">
                <label>Hobi</label>
                <input class="form-control @error('Hobi') is-invalid @enderror" value="{{ isset($hb)? $hb->Hobi : old('Hobi') }}" name="Hobi" type="text">
                @error('Hobi')
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