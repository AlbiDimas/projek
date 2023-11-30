<div class="container">
    @include('admin/pesan/show')
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
                <th>Nama</th>
                <th>Email</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($message as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->first_name}}</td>
                        <td>{{$item->email}}</td>
                        <td>
                            <a wire:click="show({{$item->id}})" class="btn btn-outline-info">Lihat Pesan</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <div class="card-footer d-flex align-items-center">
          {{$message->links()}}
    </div>
</div>
