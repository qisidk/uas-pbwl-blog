@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Data Category</h3>
    <form action="{{ url('/category') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">ID</label>
        <input type="text" name="id_category" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" name="nama_category" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Text</label>
        <input type="text" name="text_category" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
    </form>
</div>
@endsection