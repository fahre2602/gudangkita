<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>GudangKita</title>
  </head>
  <body>
    @include("navbar")
    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>GudangKita Management System</h1>
        </div>
    </div>
    @if($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include("barangslist")
                </section>
                <section class="col-md-5">
                </section>
            </div>
        </div>
    @elseif($layout == 'create')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include("barangslist")
                </section>
                <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="https://www.pinclipart.com/picdir/middle/331-3310654_amazon-referral-fees-add-to-warehouse-icon-clipart.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Masukkan Data Barang Baru</h5>
                            <form action="{{ url('/store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Kode Barang</label>
                                    <input name="kode_barang" type="text" class="form-control" placeholder="Masukkan kode barang">
                                </div>
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input name="nama_barang" type="text" class="form-control" placeholder="Masukkan nama barang">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Barang</label>
                                    <input name="jenis_barang" type="text" class="form-control" placeholder="Masukkan jenis barang">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Barang</label>
                                    <input name="jumlah_barang" type="text" class="form-control" placeholder="Masukkan jumlah barang">
                                </div>
                                <div class="form-group">
                                    <label>Letak Barang</label>
                                    <input name="letak_barang" type="text" class="form-control" placeholder="Masukkan letak barang">
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
                    @include("barangslist")
                </section>
                <section class="col">
                </section>
            </div>
        </div>
    @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include("barangslist")
                </section>
                <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="https://www.pinclipart.com/picdir/middle/331-3310654_amazon-referral-fees-add-to-warehouse-icon-clipart.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Update Data Barang</h5>
                            <form action="{{ url('/update/'.$barang->id) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Kode Barang</label>
                                    <input value="{{ $barang->kode_barang }}" name="kode_barang" type="text" class="form-control" placeholder="Masukkan kode barang">
                                </div>
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input value="{{ $barang->nama_barang }}" name="nama_barang" type="text" class="form-control" placeholder="Masukkan nama barang">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Barang</label>
                                    <input value="{{ $barang->jenis_barang }}" name="jenis_barang" type="text" class="form-control" placeholder="Masukkan jenis barang">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Barang</label>
                                    <input value="{{ $barang->jumlah_barang }}" name="jumlah_barang" type="text" class="form-control" placeholder="Masukkan jumlah barang">
                                </div>
                                <div class="form-group">
                                    <label>Letak Barang</label>
                                    <input value="{{ $barang->letak_barang }}" name="letak_barang" type="text" class="form-control" placeholder="Masukkan letak barang">
                                </div>
                                <input type="submit" class="btn btn-info" value="Update">
                                <input type="reset" class="btn btn-warning" value="Reset">
                            </form>
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