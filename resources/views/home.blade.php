@extends('layouts.main')

@section('title', 'Halaman Home')

@section('container')
    <h1>Halaman Home</h1>

    <table class="table table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Royandi</td>
                <td>royandi@example.com</td>
                <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Hapus</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Randi Laravel</td>
                <td>randi@example.com</td>
                <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Hapus</button>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="img">
      <img src="..." class="img-fluid" alt="...">
    </div>
@endsection
