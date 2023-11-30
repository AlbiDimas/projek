<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Keranjang</h1>
        </div>
        @include('component/flash')
        <div class="row">
            <div class="col-md-12 mb-3">
                <label for="tgl_pinjam">Tanggal Pinjam</label>
                <input wire:model="tgl_pinjam" type="date" name="tgl_pinjam" class="form-control">
                @error('tgl_pinjam') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-3">
                @if ($keranjang->tgl_pinjam)
                    <strong>Tanggal Pinjam : {{$keranjang->tgl_pinjam}}</strong>
                @else
                    <button wire:click="pinjam({{$keranjang->id}})" class="btn btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-bag" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z"></path>
                            <path d="M9 11v-5a3 3 0 0 1 6 0v5"></path>
                         </svg>
                        Sewa Barang
                    </button>
                @endif

                <strong class="float-end">Kode Pinjam : {{$keranjang->kode_pinjam}}</strong>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">

                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama Barang</th>
                        <th>Deskripsi Barang</th>
                        <th>Jumlah Barang</th>
                        @if (!$keranjang->tgl_pinjam)
                            <th></th>
                        @endif
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($keranjang->detail_peminjaman as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><img src="{{asset('storage')}}/{{$item->foto}}" alt="" width="100px"></td>
                            <td>{{$item->barang->barang_nama}}</td>
                            <td>{{$item->barang->barang_deskripsi}}</td>
                            <td>
                                <input wire:model="jumlah" type="number" class="form-control" style="width: 100px;">
                            </td>
                            @if (!$keranjang->tgl_pinjam)
                                <td><span wire:click="delete({{$keranjang->id}}, {{$item->id}})" class="btn btn btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7l16 0"></path>
                                        <path d="M10 11l0 6"></path>
                                        <path d="M14 11l0 6"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                     </svg>
                                    Hapus</span>
                                </td>
                            @endif
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                 @if (!$keranjang->tgl_pinjam)
                    <button wire:click="hapusMasal" class="btn btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 7l16 0"></path>
                        <path d="M10 11l0 6"></path>
                        <path d="M14 11l0 6"></path>
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                     </svg>
                        Hapus Masal
                    </button>
                 @endif
            </div>
        </div>
    </div>
</div>
