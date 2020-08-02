<div class="card mb-3">
  <img height="50px" width="10px" src="https://img.icons8.com/pastel-glyph/2x/warehouse.png" class="card-img-top" alt="gambar gudang">
  <div class="card-body">
    <h5 class="card-title">List of Barangs</h5>
    <p class="card-text">Anda dapat melihat list barang yang tersimpan dalam GudangKita disini.</p>

    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Kode Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jenis Barang</th>
            <th scope="col">Jumlah Barang</th>
            <th scope="col">Letak Barang</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        @foreach($barangs as $barang)
            <tr>
            <td>{{ $barang->kode_barang }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->jenis_barang }}</td>
            <td>{{ $barang->jumlah_barang }}</td>
            <td>{{ $barang->letak_barang }}</td>
            <td>
                <a href="{{ url('/edit/'.$barang->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <a href="{{ url('/delete/'.$barang->id) }}" class="btn btn-sm btn-danger">Delete</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>

