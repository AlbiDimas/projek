<div>
    @if (session('sukses'))
        <div class="alert alert-success">
            {{session('sukses')}}
        </div>
    @endif
    @include('admin/pendaftaran/create')
    @include('admin/pendaftaran/edit')
    @include('admin/pendaftaran/delete')
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <div class="card-body">
                <span wire:click="create" class="btn btn-sm btn-primary">Tambah</span>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Asal Sekolah</th>
                        <th scope="col">Kontak</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Perusahaan Tujuan</th>
                        <th scope="col">Bukti Identitas</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($pendaftaran as $item)

                        <tr>

                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->asal_sekolah}}</td>
                            <td>{{$item->kontak}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->tempat_lahir}}</td>
                            <td>{{$item->tgl_lahir}}</td>
                            <td>{{$item->perusahaan->pt_nama}}</td>
                            <td><img src="{{ asset('storage')}}/{{$item->identitas}}" alt="" width="100px"></td>
                            <td>
                                <span wire:click="edit({{$item->id}})" class="btn btn-sm btn-warning">Edit</span>
                                <span wire:click="delete({{$item->id}})" class="btn btn-sm btn-danger">Hapus</span>
                            </td>
                        </tr>

                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
