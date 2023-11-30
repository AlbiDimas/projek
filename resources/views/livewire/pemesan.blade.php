<div class="">
    @include('component/flash')
    @include('admin/pemesan/create')
    @include('admin/pemesan/edit')
    @include('admin/pemesan/delete')
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <br>
            <span wire:click="create" class="btn btn-sm btn-primary">Add Data</span>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Pemesan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Mesin Yang Dipesan</th>
                        <th scope="col">Nomor Kontrak</th>
                        <th scope="col">Tanggal Kontrak</th>
                        <th scope="col">Nilai Kontrak</th>
                        <th scope="col">Foto Kontrak</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($pemesan as $item)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>{{$item->mesin->mesin_nama}}</td>
                        <td>{{$item->no_kontrak}}</td>
                        <td>{{$item->tgl_kontrak}}</td>
                        <td>{{$item->nilai_kontrak}}</td>
                        <td><img src="{{ asset('storage')}}/{{$item->foto_kontrak}}" alt="" width="100px"></td>
                        <td>
                            <span wire:click="edit({{$item->id}})" class="btn btn-sm btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>
                                Edit</span>
                            <span wire:click="delete({{$item->id}})" class="btn btn-sm btn-danger"><i class="fas fa-trash">
                            </i>
                            Hapus</span>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
