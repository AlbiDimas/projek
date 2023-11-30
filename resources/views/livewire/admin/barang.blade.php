<div>

    @if (session('sukses'))

        <div class="alert alert-success">
            {{session('sukses')}}
        </div>

    @endif

   @include('admin/barang/create')
   @include('admin/barang/edit')
   @include('admin/barang/delete')

    <br>


    <div class="card">

        <div class="card-header">
            <input wire:model="search" class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <br>

            <div class="cardbody">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Deskripsi</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($barang as $item)

                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><img src="{{ asset('storage')}}/{{$item->foto}}" width="100px"></td>
                        <td>{{$item->barang_nama}}</td>
                        <td>{{$item->jumlah}}</td>
                        <td>{{$item->barang_stock}}</td>
                        <td>{{$item->kategori->nama}}</td>
                        <td>{{$item->barang_deskripsi}}</td>
                        <td>

                                <span wire:click="edit({{$item->id}})" class="btn btn-sm btn-warning mr-3">Edit</span>
                                <span wire:click="delete({{$item->id}})" class="btn btn-sm btn-danger mr-3">Hapus</span>

                        </td>
                      </tr>

                      @endforeach
                    </tbody>
                    <tfoot>
                        <span wire:click="create" class="btn btn-sm btn-primary mb-3">Tambah Barang</span>
                    </tfoot>
                  </table>
            </div>
        </div>
    </div>

</div>
