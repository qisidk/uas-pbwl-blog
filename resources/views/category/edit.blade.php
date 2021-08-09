@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Data Category</h3>
    <form action="{{ url('/category/' . $row->id_category) }}" method="POST">
    <input name="_method" type="hidden" value="PATCH">
    @csrf 
    <div class="container">
     <div class="form-group">
        <label for="">ID</label>
        <input type="text" name="id_category" class="form-control" value="{{ $row->id_category }}">
    </div>
    <div class="form-group">
        <label for="">Nama Category</label>
        <input type="text" name="nama_category" class="form-control" value="{{ $row->nama_category }}">
    </div>
    <div class="form-group">
        <label for="">Text</label>
        <input type="text" name="text_category" class="form-control"  value="{{ $row->text_category }}">
    </div>
    <div class="form-group">
        <input type="submit" value="UPDATE" class="btn btn-primary">
    </div>
    </form>
</div>
@endsection