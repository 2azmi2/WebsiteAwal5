@extends('style.style2')

@section('isi')
    <div class="containerUtama2">
        <h2>Insert Laptop</h2>
        <br>
        @if(session()->has('success'))
            <div class="alert alert-warning alert-dismissable fade show" role="alert">
                Data telah tersimpan!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="containerForm2">
            <form action="/laptop" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-outline mb-2">
                    <label class="form-label" for="iduser">Id User</label>
                    <input type="text" id="iduser" name="iduser" class="form-control" value="{{ old('iduser') }}"/>
                    @error('iduser')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="nama">Nama user</label>
                    <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama') }}"/>
                    @error('nama')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="namalaptop">Nama Laptop</label>
                    <input type="text" id="namalaptop" name="namalaptop" class="form-control" value="{{ old('namalaptop') }}"/>
                    @error('namalaptop')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="deskripsi">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" class="form-control" value="{{ old('deskripsi') }}"></textarea>
                    @error('deskripsi')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Insert</button>
            </form>
        </div>
    </div>
    <br><br>
@endsection