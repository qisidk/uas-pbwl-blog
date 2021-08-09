@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Data Post</h3>
    <form action="{{ url('/post/' . $row->id_post) }}" method="POST">
    <input name="_method" type="hidden" value="PATCH">
    @csrf
    <div class="form-group">
        <label for="">ID</label>
        <input type="text" name="id_post" class="form-control" value="{{ $row->id_post }}">
    </div>
    <div class="form-group">
        <label for="">Judul</label>
        <input type="text" name="judul_post" class="form-control" value="{{ $row->judul_post}}">
    </div>
    <div class="form-group">
        <label for="">Slug</label>
        <input type="text" name="slug_post" class="form-control" value="{{ $row->slug_post}}">
    </div>
    <div class="form-group">
        <label for="">Text</label>
        <input type="text" name="text_post" class="form-control" value="{{ $row->text_post}}">
    </div>
    <div class="form-group">
        <label for="">Tanggal</label>
        <input type="date" name="tanggal_post" class="form-control" value="{{ $row->tanggal_post}}">
    </div>
    <div class="form-group">
        <input type="submit" value="UPDATE" class="btn btn-primary">
    </div>
    </form>
</div>
@endsection