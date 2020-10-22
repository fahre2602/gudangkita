<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>MobilKita</title>
  </head>
  <body>
    @include("navbar")
    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>MobilKita Management System</h1>
        </div>
    </div>
    @if($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include("penjualanslist")
                </section>
                <section class="col-md-5">
                </section>
            </div>
        </div>
    @elseif($layout == 'create')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include("penjualanslist")
                </section>
                <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="https://www.pinclipart.com/picdir/middle/331-3310654_amazon-referral-fees-add-to-warehouse-icon-clipart.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Masukkan Data Penjualan Baru</h5>
                            <form action="{{ url('/penjualan/store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Nama Pembeli</label>
                                    <input name="nama_pembeli" type="text" class="form-control" placeholder="Masukkan Nama Pembeli">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" type="text" class="form-control" placeholder="Masukkan Email Pembeli">
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <input name="no_telepon" type="text" class="form-control" placeholder="Masukkan Nomor Telepon Pembeli">
                                </div>
                                <div class="form-group">
                                    <label>Kode Mobil</label>
                                    <input name="mobil_id" type="text" class="form-control" placeholder="Masukkan Kode Mobil">
                                </div>
                                <input type="submit" class="btn btn-info" value="Save">
                                <input type="reset" class="btn btn-warning" value="Reset">
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    @elseif($layout == 'show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col">
                    @include("penjualanslist")
                </section>
                <section class="col">
                </section>
            </div>
        </div>
    @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include("penjualanslist")
                </section>
                <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="https://www.pinclipart.com/picdir/middle/331-3310654_amazon-referral-fees-add-to-warehouse-icon-clipart.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Update Data Penjualan</h5>
                            <form action="{{ url('/penjualan/update/'.$penjualan->id) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Nama Pembeli</label>
                                    <input value="{{ $penjualan->nama_pembeli }}" name="nama_pembeli" type="text" class="form-control" placeholder="Masukkan Nama Pembeli">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input value="{{ $penjualan->email }}" name="email" type="text" class="form-control" placeholder="Masukkan Email Pembeli">
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <input value="{{ $penjualan->no_telepon }}" name="no_telepon" type="text" class="form-control" placeholder="Masukkan Nomor Telepon Pembeli">
                                </div>
                                <div class="form-group">
                                    <label>Kode Mobil</label>
                                    <input value="{{ $penjualan->mobil_id }}" name="mobil_id" type="text" class="form-control" placeholder="Masukkan Kode Mobil">
                                </div>
                                <input type="submit" class="btn btn-info" value="Update">
                                <input type="reset" class="btn btn-warning" value="Reset">
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        @elseif($layout == 'rekap')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include("penjualanslist")
                </section>
                <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="https://www.pinclipart.com/picdir/middle/331-3310654_amazon-referral-fees-add-to-warehouse-icon-clipart.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rekap Data Penjualan</h5>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col">DATA HARI INI</th>
                                    <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mobil paling banyak dijual</td>
                                        <td>Avanza</td>
                                    </tr>
                                    <tr>
                                        <td>Penjualan Hari ini</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <td>Total Penjualan Hari ini</td>
                                        <td>Rp. 700.000.000 (-10%)</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col">DATA 7 MINGGU TERAKHIR</th>
                                    <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mobil paling banyak dijual</td>
                                        <td>Avanza</td>
                                    </tr>
                                    <tr>
                                        <td>Penjualan Hari ini</td>
                                        <td>120</td>
                                    </tr>
                                    <tr>
                                        <td>Total Penjualan Hari ini</td>
                                        <td>Rp. 1.700.000.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    @endif
    <footer></footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>