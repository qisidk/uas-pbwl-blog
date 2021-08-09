@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Data Photo</h3>
    <form action="{{ url('/photo/' . $row->id_photo) }}" method="POST">
    <input name="_method" type="hidden" value="PATCH">
    @csrf 
    <div class="container">
     <div class="form-group">
        <label for="">ID</label>
        <input type="text" name="id_photo" class="form-control" value="{{ $row->id_photo }}">
    </div>
    <div class="form-group">
        <label for="">Judul</label>
        <input type="text" name="judul_photo" class="form-control" value="{{ $row->judul_photo }}">
    </div>
    <div class="form-group">
        <label for="">Text</label>
        <input type="text" name="text_photo" class="form-control"  value="{{ $row->text_photo }}">
    </div>
    <div class="form-group">
        <label for="">Tanggal</label>
        <input type="date" name="tanggal_photo" class="form-control" value="{{ $row->tanggal_photo }}">
    </div>
    <div class="form-group">
        <input type="submit" value="UPDATE" class="btn btn-primary">
    </div>
    </form>
</div>
@endsection