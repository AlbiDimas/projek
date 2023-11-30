<div class="container">
    @include('component/flash')
    @if ($create)

    <div class="modal modal-blur fade show" id="modal-default" style="display: block;">
        <div class="modal-dialog modal-default modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Tambah Kategori</h4>
        <button wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="row">
                    <div class="col">
                        <label for="nama">Nama Kategori</label>
                        <input wire:model="nama" type="text" class="form-control" name="nama" id="nama">
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer justify-content-between">
        <button wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button wire:click="store" type="button" class="btn btn-primary">Submit</button>
        </div>
        </div>

        </div>

        </div>


@endif



    @if ($edit)


    <div class="modal modal-blur fade show" id="modal-default" style="display: block;">
        <div class="modal-dialog modal-default modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Tambah Kategori</h4>
        <button wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="row">
                    <div class="col">
                        <label for="nama">Nama Kategori</label>
                        <input wire:model="nama" type="text" class="form-control" name="nama" id="nama">
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer justify-content-between">
        <button wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button wire:click="update({{$kategori_id}})" type="button" class="btn btn-primary">Submit</button>
        </div>
        </div>

        </div>

        </div>


    @endif

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
                  <th scope="col">Nama Kategori</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($kategori as $item)

                  <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$item->nama}}</td>
                      <td>
                          <span wire:click="edit({{$item->id}})" class="btn btn-outline-yellow mr-2">
                              Edit</span>
                                <a class="btn btn-outline-info" href="#">

                                  Lihat
                                </a>
                      </td>
                  </tr>

                @endforeach
              </tbody>
          </table>
        </div>
        <div class="card-footer d-flex align-items-center">
          {{$kategori->links()}}
    </div>
</div>
