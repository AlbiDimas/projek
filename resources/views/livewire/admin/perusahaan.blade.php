<div>
    @if (session('sukses'))
        <div class="alert alert-success">
            {{session('sukses')}}
        </div>
    @endif
    @include('admin/perusahaan/create')
    @include('admin/perusahaan/edit')
    @include('admin/perusahaan/delete')
    @include('admin/perusahaan/show')



    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <div class="card-body">
                <span wire:click="create" class="btn btn-sm btn-primary">Tambah</span>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col"></th>
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Bidang</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($perusahaan as $item)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><img src="{{ asset('storage')}}/{{$item->pt_logo}}" alt="" width="100px"></td>
                            <td>{{$item->pt_nama}}</td>
                            <td>{{$item->pt_alamat}}</td>
                            <td>{{$item->pt_bidang}}</td>
                            <td>
                                <div class="btn-group mr-4">
                                    <span wire:click="edit({{$item->id}})" class="btn btn-sm btn-warning mr-3">Edit</span>
                                    <span wire:click="show({{$item->id}})" class="btn btn-sm btn-success mr-3">Lihat</span>
                                    <span wire:click="delete({{$item->id}})" class="btn btn-sm btn-danger">Hapus</span>
                                </div>

                            </td>
                        </tr>

                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
