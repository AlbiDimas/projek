<div>

    @include('admin/pengembalian/create')
    @include('admin/pengembalian/edit')
    @include('admin/pengembalian/show')



    @if (session('sukses'))
        <div class="alert alert-success">
            {{session('sukses')}}
        </div>
    @endif




    <div class="card">
        <div class="car-header">
            <div class="card-body">
                <span wire:click="create" class="btn btn-sm btn-primary">Tambah Data</span>
                <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Nama Mesin</th>
                        <th>Penyewa</th>
                        <th>Kontak</th>
                        <th>Foto Barang</th>
                        <th>Kondisi</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($pengembalian as $item)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->tgl_pengembalian}}</td>
                        <td>{{$item->barang->barang_nama}}</td>
                        <td>{{$item->penyewa}}</td>
                        <td>{{$item->kontak}}</td>
                        <td><img src="{{ asset('storage')}}/{{$item->foto_barang}}" width="100px"></td>
                        <td>{{$item->kondisi->kondisi}}</td>
                        <td>
                            <span wire:click="edit({{$item->id}})" class="btn btn-sm btn-warning mr-2">Edit</span>
                            <span wire:click="show({{$item->id}})" class="btn btn-sm btn-success">Lihat</span>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
