@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Data Album</h3>
    <form action="{{ url('/album/' . $row->id_album) }}" method="POST">
    <input name="_method" type="hidden" value="PATCH">
    @csrf 
    <div class="container">
     <div class="form-group">
        <label for="">ID</label>
        <input type="text" name="id_album" class="form-control" value="{{ $row->id_album }}">
    </div>
    <div class="form-group">
        <label for="">Nama Album</label>
        <input type="text" name="nama_photo" class="form-control" value="{{ $row->nama_photo }}">
    </div>
    <div class="form-group">
        <label for="">Text</label>
        <input type="text" name="text_photo" class="form-control"  value="{{ $row->text_photo }}">
    </div>
    <div class="form-group">
        <input type="submit" value="UPDATE" class="btn btn-primary">
    </div>
    </form>
</div>
@endsection