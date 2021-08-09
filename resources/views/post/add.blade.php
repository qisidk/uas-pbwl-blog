@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Data Post</h3>
    <form action="{{ url('/post') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">ID</label>
        <input type="text" name="id_post" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Judul</label>
        <input type="text" name="judul_post" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Slug</label>
        <input type="text" name="slug_post" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Text</label>
        <input type="text" name="text_post" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Tanggal</label>
        <input type="date" name="tanggal_post" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
    </form>
</div>
@endsection