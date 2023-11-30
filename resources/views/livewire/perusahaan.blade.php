<div class="container">
    @include('component/flash')
    @include('admin/perusahaan/create')
    @include('admin/perusahaan/edit')
    @include('admin/perusahaan/delete')
    @include('admin/perusahaan/show')
    @include('admin/perusahaan/show-logo')




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
                  <th scope="col"></th>
                  <th scope="col">Nama Perusahaan</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($perusahaan as $item)

                  <tr>
                      <td>{{$loop->iteration}}</td>
                      <td><a wire:click="show_logo({{$item->id}})" style="cursor: pointer;"><img src="{{ asset('storage')}}/{{$item->pt_logo}}" alt="" width="100px"></a></td>
                      <td>{{$item->pt_nama}}</td>
                      <td>
                          <span wire:click="edit({{$item->id}})" class="btn  btn-outline-warning">
                              Edit</span>
                          <span wire:click="show({{$item->id}})" class="btn  btn-outline-info">
                              Lihat</span>
                          <span wire:click="delete({{$item->id}})" class="btn  btn-outline-danger">
                          Hapus</span>

                      </td>
                  </tr>

                @endforeach
              </tbody>
          </table>
        </div>
        <div class="card-footer d-flex align-items-center">
          {{$perusahaan->links()}}
    </div>
</div>
