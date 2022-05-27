@extends('style.style2')

@section('isi')
    <div class="container5">
        <h1>Data Laptop</h1>
        <div class="containButton">
            <a type="button" class="btn btn-primary btn-lg" href="/laptop/create" name="tambah">Tambah</a>
        </div>
        <div class="containerForm3">
            <br>
            <form action="/search" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" id="search" name="search">
                    <div class="input-group-append">
                      <button class="btn btn-success" type="submit">Search</button>  
                    </div>
                </div>
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama User</th>
                    <th scope="col">Kode Laptop</th>
                    <th scope="col">Laptop</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col" width="280px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->namalaptop }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td><form action="/laptop/{{ $item->id }}" method="POST">
                            @method('GET')
                            <a class="btn btn-primary" href="/laptop/{{ $item->id }}/edit">Edit</a>
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection