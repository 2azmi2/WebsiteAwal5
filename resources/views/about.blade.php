@extends('style.style')

@section('isi')
    <br>
    <div class="fix">
        BIODATA DIRI<br>
        ANIME LOVER
    </div>
    <div class="myself">
        <br>
        <div class="col-md-8 col-md-offset-2">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/me2.jpg" class="d-block w-100" alt="gambar">
                  </div>
                  <div class="carousel-item">
                    <img src="img/me3.jpg" class="d-block w-100" alt="gambar">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div><br>
    <div class="contain">      
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>Nama</td>
              <td>:</td>
              <td>{{ $nama }}</td>
            </tr>
            <tr>
              <td>TTL</td>
              <td>:</td>
              <td>{{ $ttl }}</td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>:</td>
              <td>{{ $alamat }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>{{ $email }}</td>
            </tr>
            <tr>
              <td>Nomor Telepon</td>
              <td>:</td>
              <td>{{ $nomor }}</td>
            </tr>
            <tr>
                <td>Okupasi</td>
                <td>:</td>
                <td>{{ $okupasi }}</td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>{{ $hobi }}</td>
            </tr>
          </tbody>
        </table>
      </div>
      <br>
@endsection