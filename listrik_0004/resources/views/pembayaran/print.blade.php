<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <title>Print Struk Pembayaran</title>
    </head>
    <body>
        <h4 align="center">Pembayaran PLN</h4>
        <p align="center">Jl. Brigjen Katamso, Kec. Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11420</p>
        </br>
        </br>
        </br>
        <table class="table table-striped">
            <tr>
                <th scope="col">Nama Pelanggan</th>
                <th scope="col">{{ $pembayaran->tagihan->pelanggan->nama_pelanggan }}</th>
            </tr>
            <tr>
                <th scope="col">Bulan & Tahun</th>
                <th scope="col">{{ \Carbon\Carbon::parse($pembayaran->tagihan->bulan_tahun)->isoFormat('MMMM, Y') }}</th>
            </tr>
            <tr>
                <th scope="col">Biaya Admin</th>
                <th scope="col">Rp. 5,000</th>
            </tr>
            <tr>
                <th scope="col">Total</th>
                <th scope="col">Rp. {{ number_format($pembayaran->tagihan->jumlah_meter * $pembayaran->tagihan->pelanggan->tarif->tarifperkwh + 5000) }}</th>
            </tr>
        </table>

        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
              <footer>
                <p> &copy; PLN | Dini puspitasari 0004.03.RPL </p>
              </div>
              </footer>
            </div>
          </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>