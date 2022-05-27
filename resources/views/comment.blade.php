@extends('style.style')

@section('isi')
    <div class="containerform">
        <div class="masuk">
            <div class="judul"><h2>Comment</h2></div>
            <form>
                <table>
                    <tr>
                        <td>Name  </td>
                        <td><input type="text" name="nama" size="50"></td>
                    </tr>
                    <tr>
                        <td>Email  </td>
                        <td><input type="text" name="email" size="50"></textarea></td>
                    </tr>
                    <tr>
                        <td>Comment  </td>
                        <td><textarea name="alamat" rows="5" cols="30"></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Kirim"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <br><br>
@endsection