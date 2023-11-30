<div>
    @if (session('sukses'))
        <div class="alert alert-success">
            {{'sukses'}}
        </div>
    @endif
    @if ($create)

        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col">
                                <label for="nama">Nama Kategori</label>
                                <input wire:model="nama" type="text" class="form-control" name="nama" id="nama">
                                @error('nama')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </form>
                    <br>
                    <div class="btn-group">
                        <span wire:click="store" class="btn btn-sm btn-primary">Submit</span>
                    </div>
                </div>
            </div>
        </div>

    @endif

    @if ($edit)


        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col">
                                <label for="nama">Nama Kategori</label>
                                <input wire:model="nama" type="text" class="form-control"  name="nama" id="nama">
                                @error('nama')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </form>
                    <br>
                    <div class="btn-group">
                        <span wire:click="update({{$kategori_id}})" class="btn btn-sm btn-primary">Submit</span>
                    </div>
                </div>
            </div>
        </div>


    @endif

    <br>

    <div class="card">

        <div class="card-header">
            <span wire:click="create" class="btn btn-sm btn-primary">Tambah Kategori</span>
            <div class="card-body">
                <table class="table">
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
                                <div class="btn-group">
                                    <span wire:click="edit({{$item->id}})" class="btn btn-sm btn-warning mr-2">Edit</span>
                                    <span class="btn btn-sm btn-success">Lihat</span>
                                </div>
                            </td>
                        </tr>

                      @endforeach
                    </tbody>
                    <tfoot>
                        {{$kategori->links()}}
                    </tfoot>
                  </table>
            </div>
        </div>
    </div>
</div>
