<div class="container">



   @include('admin/barang/create')
   @include('admin/barang/edit')
   @include('admin/barang/delete')
   @include('admin/barang/show-img')
   @include('component/flash')


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
                  <td><a wire:click="show_img({{$item->id}})" style="cursor: pointer"><img src="{{ asset('storage')}}/{{$item->foto}}" width="100px"></a></td>
                  <td>{{$item->barang_nama}}</td>
                  <td>{{$item->jumlah}}</td>
                  <td>{{$item->barang_stock}}</td>
                  <td>{{$item->kategori->nama}}</td>
                  <td>{{$item->barang_deskripsi}}</td>
                  <td>

                      <a wire:click="edit({{$item->id}})" class="btn btn-outline-yellow">

                          Edit
                          </a>
                          <a wire:click="delete({{$item->id}})" class="btn btn-outline-danger">
                              Delete
                          </a>

                  </td>
                </tr>

                @endforeach
              </tbody>
          </table>
        </div>
        <div class="card-footer d-flex align-items-center">
          {{$barang->links()}}
    </div>

</div>
