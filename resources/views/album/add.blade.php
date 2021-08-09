@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Data Album</h3>
    <form action="{{ url('/album') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">ID</label>
        <input type="text" name="id_album" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" name="nama_photo" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Text</label>
        <input type="text" name="text_photo" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
    </form>
</div>
@endsection