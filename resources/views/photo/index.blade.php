@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Daftar Photo
            <a href="{{ url('/photo/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
        </h3>
        <table class="table table bordered">
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Text</th>
                <th>Tanggal</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->id_photo}} </td>
                <td>{{ $row->judul_photo}} </td>
                <td>{{ $row->text_photo}} </td>
                <td>{{ $row->tanggal_photo}} </td>
                <td><a href="{{ url('photo/' . $row->id_photo . '/edit') }}" class="btn btn-primary btn-sm">Edit</a></td>
                <td><a href="{{ url('photo/' . $row->id_photo . '/hapus') }}" class="btn btn-danger btn-sm">Hapus</a> </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection