<div class="container">

    @if (session('sukses'))
        <div class="alert alert-success">
            {{session('sukses')}}
        </div>
    @endif

    @include('component/flash')

    <div class="mb-3">
        <button wire:click="format" class="btn btn-sm btn-outline-secondary">Semua</button>
        <button wire:click="belumDipinjam" class="btn btn-sm btn-outline-secondary">Barang Belum Disewa</button>
        <button wire:click="sedangDipinjam" class="btn btn-sm btn-outline-secondary">Barang Sedang Disewa</button>
        <button wire:click="selesaiDipinjam" class="btn btn-sm btn-outline-secondary">Barang Selesai Disewa</button>
    </div>

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Transaksi</h3>
          <div class="ms-auto text-muted">
            Search:
            <div class="ms-2 d-inline-block">
              <input wire:model="search" type="text" class="form-control form-control-sm" aria-label="Search invoice">
            </div>
          </div>
        </div>
        <div class="card-body border-bottom py-3">
            @if ($transaksi->isNotEmpty())
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Peminjaman</th>
                            <th>Nama Barang</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Kembali</th>
                            <th>Denda</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                            @if (!$selesai_dipinjam)
                                <th></th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($transaksi as $item)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->kode_pinjam}}</td>
                            <td>
                                <ul>
                                    @foreach ($item->detail_peminjaman as $detail_peminjaman)
                                        <li>{{$detail_peminjaman->barang->barang_nama}}</li>
                                    @endforeach
                                </ul>
                            </td>

                            <td>{{\Carbon\Carbon::create($item->tgl_pinjam)->format('d-m-y')}}</td>
                            <td>{{\Carbon\Carbon::create($item->tgl_kembali)->format('d-m-y')}}</td>
                            <td>{{$item->denda}}</td>
                            <td>
                                <ul>
                                    @foreach ($item->detail_peminjaman as $detail_peminjaman)
                                        <li>
                                            {{$detail_peminjaman->peminjaman->jumlah}}
                                        </li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                @if ($item->status == 1)
                                    <span class="status status-secondary">Barang Belum Disewa</span>
                                @elseif ($item->status == 2)
                                    <span class="status status-yellow">Barang Sedang Disewa</span>
                                @else
                                    <span class="status status-green">Barang Selesai Disewa</span>
                                @endif
                            </td>
                            <td>
                                @if (!$selesai_dipinjam)
                                    @if ($item->status == 1)
                                    <span wire:click="pinjam({{$item->id}})" class="btn btn-sm btn-primary"><i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        Sewa Barang
                                    </span>
                                    @elseif ($item->status == 2)
                                        <span wire:click="kembali({{$item->id}})" class="btn btn-sm btn-info"><i class="fa fa-undo" aria-hidden="true"></i>
                                            Kembalikan Barang
                                        </span>
                                    @endif
                                @endif
                            </td>
                        </tr>

                        @endforeach
                        </tbody>
                        <tfoot>
                            {{$transaksi->links()}}
                        </tfoot>
                    </table>

                </div>
            @endif
        </div>
        <div class="card-footer d-flex align-items-center">
          {{$transaksi->links()}}
        </div>
    </div>
</div>
