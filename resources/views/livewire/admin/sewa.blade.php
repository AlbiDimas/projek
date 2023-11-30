<div>

    @if (session('sukses'))
        <div class="alert alert-success">
            {{session('sukses')}}
        </div>
    @endif

    @include('admin/sewa/create')
    @include('admin/sewa/edit')
    @include('admin/sewa/delete')
    @include('admin/sewa/show')



    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <br>
            <div class="card-body">
                <span wire:click="create" class="btn btn-sm btn-primary">Add Data Sewa</span>
                <br>
                <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal Sewa</th>
                        <th>Nama Mesin</th>
                        <th>Penyewa</th>
                        <th>Alamat</th>
                        <th>Tanggal Pengembalian</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($sewa as $item)

                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->tgl_sewa}}</td>
                        <td>{{$item->barang->barang_nama}}</td>
                        <td>{{$item->penyewa}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>{{$item->tgl_kembali}}</td>
                        <td>
                            <span wire:click="edit({{$item->id}})" class="btn btn-sm btn-warning">Edit</span>
                            <span wire:click="delete({{$item->id}})" class="btn btn-sm btn-danger">Hapus</span>
                            <span wire:click="show({{$item->id}})" class="btn btn-sm btn-success">Lihat</span>
                        </td>
                      </tr>

                      @endforeach
                    </tbody>
                    <tfoot>
                        {{$sewa->links()}}
                      </tfoot>
                  </table>

            </div>
        </div>
    </div>
</div>
