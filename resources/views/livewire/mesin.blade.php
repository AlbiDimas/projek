<div class="container">
    @include('component/flash')
    @include('admin/mesin/create')
    @include('admin/mesin/edit')
    @include('admin/mesin/delete')
    @include('admin/mesin/showimg')


    <br>
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
                  <th scope="col">No</th>
                  <th scope="col">Foto Mesin</th>
                  <th scope="col">Nama Mesin</th>
                  <th scope="col">Pemesan</th>
                  <th scope="col">Spesifikasi</th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">Kategori</th>
                  <th>Estimasi Selesai</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($mesin as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td><a wire:click="showimg({{$item->id}})" style="cursor: pointer"><img src="{{ asset('storage')}}/{{$item->foto_mesin}}" alt="" width="100px"></a></td>
                  <td>{{$item->mesin_nama}}</td>
                  <td>{{$item->pemesan}}</td>
                  <td>{{$item->mesin_spesifikasi}}</td>
                  <td>{{$item->mesin_jumlah}}</td>
                  <td>{{$item->kategori->nama}}</td>
                  <td>{{$item->tgl_selesai}}</td>
                  <td>
                      <a wire:click="edit({{$item->id}})" href="#" class="btn btn-outline-yellow">
                        Edit
                      </a>
                      <span wire:click="delete({{$item->id}})" class="btn btn-outline-danger">
                      Hapus</span>
                  </td>
                </tr>
                @endforeach
              </tbody>
          </table>
        </div>
        <div class="card-footer d-flex align-items-center">
          {{$mesin->links()}}
    </div>
</div>
