@extends('layouts.app')

@section('content')
        <div class="container">
        <h3>Daftar Category
               <a href="{{ url('/category/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
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
                <td>{{ $row->id_category}} </td>
                <td>{{ $row->nama_category}} </td>
                <td>{{ $row->text_category}} </td>
                <td><a href="{{ url('category/' . $row->id_category . '/edit') }}" class="btn btn-primary btn-sm">Edit</a></td>
                <td><a href="{{ url('category/' . $row->id_category . '/hapus') }}" class="btn btn-dangerss btn-sm">Hapus</a> </td>
            </tr>
            @endforeach
        </table>
@endsection