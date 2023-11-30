<div class="container">

    @include('admin/pengembalian/create')
    @include('admin/pengembalian/edit')
    @include('admin/pengembalian/show')
    @include('admin/pengembalian/show-barang')
    @include('component/flash')

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
                  <td><a wire:click="show_barang({{$item->id}})" style="cursor: pointer;"><img src="{{ asset('storage')}}/{{$item->foto_barang}}" width="100px"></a></td>
                  <td>
                      @if ($item->kondisi->kondisi == 'Baik')
                          <span class="status status-green">Baik</span>
                      @elseif ($item->kondisi->kondisi == 'Kurang Baik')
                      <span class="status status-yellow">Kurang Baik</span>
                      @else
                      <span class="status status-red ">Rusak</span>
                      @endif
                  </td>
                  <td>
                      <span wire:click="edit({{$item->id}})" class="btn btn-outline-yellow mr-2">
                          Edit</span>
                      <span wire:click="show({{$item->id}})" class="btn btn-outline-info">Lihat</span>
                  </td>
                </tr>
                @endforeach
              </tbody>
          </table>
        </div>
        <div class="card-footer d-flex align-items-center">
          {{$pengembalian->links()}}
    </div>
</div>
