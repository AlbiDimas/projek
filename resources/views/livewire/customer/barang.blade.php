<div class="container">
    @include('component/flash')
    <div class="row">
       <div class="col-md-8 mb-4">
        <h1>{{$title}}</h1>
       </div>
       @if (!$detail_barang)
            <div class="col-md-4">
                <div class="input-group flex-nowrap">
                    <input wire:model="search" type="text" class="form-control" placeholder="Cari barang..." aria-label="Cari barang..." aria-describedby="addon-wrapping">
                    <button class="input-group-text" id="addon-wrapping">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
       @endif
    </div>
    <br>
    @if ($detail_barang)
        <div class="row">
            <div class="col-md-4">
                <img src="/storage/{{$barang->foto}}" alt="{{$barang->barang_nama}}" width="300" height="300">
            </div>
            <div class="col-md-8">
                <table class="table mb-3">
                    <tbody>
                        <tr>
                            <td>Nama Barang</td>
                            <td>:</td>
                            <td>{{$barang->barang_nama}}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Barang</td>
                            <td>:</td>
                            <td>{{$barang->jumlah}}</td>
                        </tr>
                        <tr>
                            <td>Stock Barang</td>
                            <td>:</td>
                            <td>{{$barang->barang_stock}}</td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>:</td>
                            <td>{{$barang->kategori->nama}}</td>
                        </tr>
                        <tr>
                            <td>Deskripsi Barang</td>
                            <td>:</td>
                            <td>{{$barang->barang_deskripsi}}</td>
                        </tr>
                    </tbody>

                </table>
                <span class="btn btn-sm btn-primary"><i class="fa fa-shopping-bag" aria-hidden="true"></i>
                Sewa Barang</span>
                <span wire:click="keranjang({{$barang->id}})" class="btn btn-sm btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Keranjang</span>
            </div>
        </div>
    @else
        @if ($barang->isNotEmpty())
            <div class="row">
                @foreach ($barang as $item)
                    <div class="col-md-2 mb-3">
                        <div class="card">
                            <img src="{{ asset('storage')}}/{{$item->foto}}" class="card-img-top" alt="..." width="200" height="200">
                            <div class="card-body">
                            <h5 class="card-title">{{$item->barang_nama}}</h5>
                            <p class="card-text">{{$item->kategori->nama}}</p>
                            <a wire:click="detailBarang({{$item->id}})" class="btn btn-primary btn-icon-split">
                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="code"><path d="M6 6a2 2 0 0 1 2-2 1 1 0 0 0 0-2 4 4 0 0 0-4 4v3a2 2 0 0 1-2 2 1 1 0 0 0 0 2 2 2 0 0 1 2 2v3a4 4 0 0 0 4 4 1 1 0 0 0 0-2 2 2 0 0 1-2-2v-3a4 4 0 0 0-1.38-3A4 4 0 0 0 6 9Zm16 5a2 2 0 0 1-2-2V6a4 4 0 0 0-4-4 1 1 0 0 0 0 2 2 2 0 0 1 2 2v3a4 4 0 0 0 1.38 3A4 4 0 0 0 18 15v3a2 2 0 0 1-2 2 1 1 0 0 0 0 2 4 4 0 0 0 4-4v-3a2 2 0 0 1 2-2 1 1 0 0 0 0-2Z"></path></svg>
                                Lihat Barang
                            </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-danger">
                Barang Tidak Ditemukan
            </div>
        @endif
    @endif
</div>
