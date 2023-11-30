<div class="container">
    @include('admin/lahan/create')
    @include('admin/lahan/edit')
    @include('admin/lahan/show')
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
                <th>Nama IKM</th>
                <th>Penanggung Jawab</th>
                <th>Alamat</th>
                <th>Lokasi Lahan</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($lahan as $item)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->nama_ikm}}</td>
                <td>{{$item->penanggung_jawab}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->lokasi_lahan}}</td>
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
          {{-- {{$lahan->links()}} --}}
    </div>
</div>
