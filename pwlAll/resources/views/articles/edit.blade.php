@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Artikel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Artikel Page</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session("success") }}
            </div>
        @endif
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit Artikel</h3>
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
            <form action="/articles/{{$article->id}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                   <div class="form-group">
                       <label for="title">Judul</label>
                       <input type="text" class="form-control" required="required" name="title" value="{{$article->title}}"></br>
                   </div>
                   <div class="form-group">
                       <label for="content">Content</label>
                       <input type="text" class="form-control"required="required" name="content" value="{{$article->content}}"></br>
                   </div>
                   <div class="form-group">
                       <label for="image">Feature Image</label>
                       <input type="file" class="form-control" required="required" name="image" value="{{$article->featured_image}}"></br>
                       <img width="150px" src="{{asset('storage/'.$article->featured_image)}}">
                   </div>
                   <button type="submit" class="btn btn-primary float-right">UbahData</button>
                </form>
        </div>
        <div class="card-footer">
          footer
        </div>
      </div>
    </section>
  </div>
@endsection