@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Data Photo</h3>
    <form action="{{ url('/photo') }}" method="POST">
    @csrf
     <div class="form-group">
        <label for="">ID</label>
        <input type="text" name="id_photo" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Judul</label>
        <input type="text" name="judul_photo" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Text</label>
        <input type="text" name="text_photo" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Tanggal</label>
        <input type="date" name="tanggal_photo" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
    </form>
</div>
@endsection