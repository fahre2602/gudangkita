<div class="card mb-3">
  <img height="50px" width="10px" src="https://img.icons8.com/pastel-glyph/2x/warehouse.png" class="card-img-top" alt="gambar gudang">
  <div class="card-body">
    <h5 class="card-title">Daftar Penjualan</h5>
    <p class="card-text">Anda dapat melihat list penjualan oleh showroom MobilKita dibawah ini.</p>

    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Nama Pembeli</th>
            <th scope="col">Email</th>
            <th scope="col">No. Telepon</th>
            <th scope="col">Kode Mobil</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        @foreach($penjualans as $penjualan)
            <tr>
            <td>{{ $penjualan->nama_pembeli }}</td>
            <td>{{ $penjualan->email }}</td>
            <td>{{ $penjualan->no_telepon }}</td>
            <td>{{ $penjualan->mobil_id }}</td>
            <td>
                <a href="{{ url('/penjualan/edit/'.$penjualan->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <a href="{{ url('/penjualan/delete/'.$penjualan->id) }}" class="btn btn-sm btn-danger">Delete</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('/penjualan/create') }}" class="btn btn-sm btn-success">Tambah Data Penjualan Baru</a>
    <a href="{{ url('/penjualan/rekap') }}" class="btn btn-sm btn-warning">Lihat Rekap Data</a>
  </div>
</div>

