@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Daftar Post
             <a href="{{ url('/post/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
        </h3>
        <table class="table table bordered">
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Slug</th>
                <th>Text</th>
                <th>Tanggal</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->id_post}} </td>
                <td>{{ $row->judul_post}} </td>
                <td>{{ $row->slug_post}} </td>
                <td>{{ $row->text_post}} </td>
                <td>{{ $row->tanggal_post}} </td>
                <td><a href="{{ url('post/' . $row->id_post . '/edit') }}" class="btn btn-primary btn-sm">Edit</a></td>
                <td><a href="{{ url('post/' . $row->id_post . '/hapus') }}" class="btn btn-danger btn-sm">Hapus</a> </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection