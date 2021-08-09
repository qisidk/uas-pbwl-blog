@extends('layouts.app')

@section('content')
        <div class="container">
        <h3>Daftar Album
            <a href="{{ url('/album/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
        </h3>
        <table class="table table bordered">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Text</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->id_album}} </td>
                <td>{{ $row->nama_photo}} </td>
                <td>{{ $row->text_photo}} </td>
                <td><a href="{{ url('album/' . $row->id_album . '/edit') }}" class="btn btn-primary btn-sm">Edit</a></td>
                <td><a href="{{ url('album/' . $row->id_album . '/hapus') }}" class="btn btn-danger btn-sm">Hapus</a> </td>
            </tr>
            @endforeach
        </table>
@endsection