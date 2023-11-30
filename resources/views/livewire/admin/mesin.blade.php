<div>
    @if (session('sukses'))
        <div class="alert alert-success">
            {{session('sukses')}}
        </div>
    @endif
    @include('admin/mesin/create')
    @include('admin/mesin/edit')
    @include('admin/mesin/delete')
    <br>
    <div class="card">
        <div class="card-header">
            <span wire:click="create" class="btn btn-sm btn-primary">Add Data</span>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Mesin</th>
                        <th scope="col">Spesifikasi</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Foto Mesin</th>
                        <th>Estimasi Selesai</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($mesin as $item)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->mesin_nama}}</td>
                        <td>{{$item->mesin_spesifikasi}}</td>
                        <td>{{$item->mesin_jumlah}}</td>
                        <td>{{$item->kategori->nama}}</td>
                        <td><img src="{{ asset('storage')}}/{{$item->foto_mesin}}" alt="" width="100px"></td>
                        <td>{{$item->tgl_selesai}}</td>
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
