@extends('style.style')

@section('isi')
    <br>
    <div class="row">
        <div class="col-sm-4">
            <img src="img/bgh1.png" class="rounded" alt="gambar round" width="75px" height="75px">
            <h3>Home</h3>
            <p>Home merupakan interface awal yang berisi mengenai penjelasan tentang menu apa saja
                yang terdapat di dalam web ini.</p>
        </div>
        <div class="col-sm-4">
            <img src="img/bgh2.png" class="rounded" alt="gambar round" width="75px" height="75px">
            <h3>Biodata</h3>
            <p>Biodata berisi profile dari pembuat web ini yaitu R.Muhammad Azmi Herdi Shofiyullah
                yang sekarang sedang melanjutkan pendidikan D4 di Polinema.</p>
        </div>
        <div class="col-sm-4">
            <img src="img/bgh3.png" class="rounded" alt="gambar round" width="75px" height="75px">
            <h3>Comment</h3>
            <p>Comment berisi tempat untuk memberikan komentar terhadap web yang dibuat atau
                web yang sekarang anda jelajahi.</p>
        </div>
        <br>
        <div class="col-sm-4">
            <img src="img/bgh4.png" class="rounded" alt="gambar round" width="75px" height="75px">
            <h3>Models</h3>
            <p>Bagian yang nantinya berhubungan dengan database. Namun karena database belum dipelajari 
                maka pada praktik kali ini hanya digunakan untuk menempatkan variabel.
            </p>
        </div>
        <div class="col-sm-4">
            <img src="img/bgh5.png" class="rounded" alt="gambar round" width="75px" height="75px">
            <h3>Controller</h3>
            <p>Sebuah pengaturan yang digunakan untuk mengakses model sebelum nantinya akan dipakai di
                dalam router. Pada bagian controller ini terdapat pemanggilan Models dan pembuatan sebuah 
                Function yang nantinya akan dipanggil di dalam router.
            </p>
        </div>
        <div class="col-sm-4">
            <img src="img/bgh6.png" class="rounded" alt="gambar round" width="75px" height="75px">
            <h3>Routes</h3>
            <p>Sebuah jalur URL yang bisa diakses oleh pengguna aplikasi dan ke mana jalur itu diproses.
                Di dalam praktikum kali ini semua jalur akan dihubungkan ke controller yang telah memiliki
                atau menampung isi dari models.
            </p>
        </div>
    </div>
@endsection('isi')
    