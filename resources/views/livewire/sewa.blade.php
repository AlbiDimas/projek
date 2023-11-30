<div class="container">

    @include('component/flash')
    @include('admin/sewa/create')
    @include('admin/sewa/edit')
    @include('admin/sewa/delete')
    @include('admin/sewa/show')




    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Sewa</h3>
        </div>
        <div class="card-body border-bottom py-3">
          <div class="d-flex">
            <div class="text-muted">
              <a wire:click="create" class="btn btn-outline-primary">
                Tambah Data
              </a>
            </div>
            <div class="ms-auto text-muted">
              Search:
              <div class="ms-2 d-inline-block">
                <input wire:model="search" type="text" class="form-control form-control-sm" aria-label="Search invoice">
              </div>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal Sewa</th>
                <th>Barang Yang Disewa</th>
                <th>Penyewa</th>
                <th>Alamat</th>
                <th>Nilai Sewa</th>
                <th>Jumlah</th>
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
                <td>{{$item->nilai_sewa}}</td>
                <td>{{$item->qty}}</td>
                <td>{{$item->tgl_kembali}}</td>
                <td>
                    <a wire:click="edit({{$item->id}})" class="btn btn-outline-yellow">Edit</a>
                    <a wire:click="show({{$item->id}})" class="btn btn-outline-info">Lihat</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="card-footer d-flex align-items-center">
          {{$sewa->links()}}
    </div>
</div>
