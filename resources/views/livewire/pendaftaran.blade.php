<div class="container">
    @include('component/flash')
    {{-- @include('admin/pendaftaran/create') --}}
    @include('admin/pendaftaran/show')
    @include('admin/pendaftaran/edit')
    @include('admin/pendaftaran/delete')
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
                  <th scope="col">Tanggal Daftar</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Asal Sekolah</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Tempat Lahir</th>
                  <th scope="col">Tanggal Lahir</th>
                  <th scope="col">Perusahaan Tujuan</th>
                  <th scope="col">Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pendaftaran as $item)

                  <tr>

                      <td>{{$loop->iteration}}</td>
                      <td>
                        {{$item->tgl_daftar}}
                      </td>
                      <td>{{$item->nama}}</td>
                      <td>{{$item->asal_sekolah}}</td>
                      <td>{{$item->alamat}}</td>
                      <td>{{$item->tempat_lahir}}</td>
                      <td>{{$item->tgl_lahir}}</td>
                      <td>{{$item->perusahaan->pt_nama}}</td>
                      <td>
                          @if ($item->status->status == 'Confirm')
                              <span class="status status-green">Confirm</span>
                          @elseif ($item->status->status == 'Unconfirm')
                              <span class="status status-red">Unconfirm</span>
                          @else
                              <span class="status status-yellow">Belum Confirm</span>
                          @endif
                      </td>
                      <td>
                        <a wire:click="show({{$item->id}})" class="btn btn-outline-info">Lihat</a>
                        <a wire:click="edit({{$item->id}})" class="btn btn-outline-success">Update Status</a>
                      </td>
                  </tr>

                @endforeach
              </tbody>
          </table>
        </div>
        <div class="card-footer d-flex align-items-center">
          {{$pendaftaran->links()}}
    </div>
</div>
