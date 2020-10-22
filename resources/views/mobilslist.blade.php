<div class="card mb-3">
  <img height="50px" width="10px" src="https://img.icons8.com/pastel-glyph/2x/warehouse.png" class="card-img-top" alt="gambar gudang">
  <div class="card-body">
    <h5 class="card-title">Daftar Mobil</h5>
    <p class="card-text">Anda dapat melihat list mobil yang tersedia di showroom MobilKita dibawah ini.</p>

    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Nama</th>
            <th scope="col">Harga</th>
            <th scope="col">Stock</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        @foreach($mobils as $mobil)
            <tr>
            <td>{{ $mobil->nama }}</td>
            <td class="currency">{{ $mobil->harga }}</td>
            <td>{{ $mobil->stock }}</td>
            <td>
                <a href="{{ url('/edit/'.$mobil->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <a href="{{ url('/delete/'.$mobil->id) }}" class="btn btn-sm btn-danger">Delete</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('/create') }}" class="btn btn-sm btn-success">Tambah Mobil Baru</a>
  </div>
</div>

