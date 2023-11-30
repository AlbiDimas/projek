<div>
    @include('admin/data-lahan/create')
    @include('admin/data-lahan/show-img')
    @include('component/flash')

    <div class="container">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Lahan</h3>
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
                    <th>Foto Lahan</th>
                    <th>Penanggung Jawab</th>
                    <th>Lokasi Lahan</th>
                    <th>Luas Lahan</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data_lahan as $item)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                        <a wire:click="show_img({{$item->id}})" style="cursor: pointer;">
                            <img src="/storage/{{$item->foto_lahan}}" width="100px" alt="">
                        </a>
                    </td>
                    <td>{{$item->penanggung_jawab}}</td>
                    <td>{{$item->lokasi_lahan}}</td>
                    <td>{{$item->luas_lahan}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="card-footer d-flex align-items-center">
              {{-- {{$lahan->links()}} --}}
        </div>
    </div>
</div>
