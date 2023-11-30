<div>
    {{-- Include --}}
    @include('admin/admin-page/message/pesan')
    @include('admin/admin-page/barang/detailBarang')
    @include('admin/admin-page/mesin/pesananMesin')
    @include('admin/admin-page/perusahaan/detailPerusahaan')
    @include('admin/admin-page/pendaftaran/detailSiswa')
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Barang
                        </h3>
                        <div class="card-body">
                            <table class="table">
                                <thead class="table-light">
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Barang</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($barang as $item)
                                    <tr>
                                        <td>
                                            {{$loop->iteration}}
                                        </td>
                                        <td>
                                            {{$item->barang_nama}}
                                        </td>
                                        <td>
                                        <a wire:click="detail_barang({{$item->id}})" class="btn btn-link link-secondary">
                                            Detail Barang
                                        </a>
                                        </td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                            <tfoot>
                                <a href="/dt-barang" class="btn btn-link link-secondary">Lihat Selengkapnya -></a>
                            </tfoot>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pesan</h3>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Email</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($message as $item)
                                      <tr>
                                        <td>
                                            {{$loop->iteration}}
                                        </td>
                                        <td>
                                            {{$item->email}}
                                        </td>
                                        <td>
                                            <a wire:click="pesan({{$item->id}})" class="btn btn-link link-secondary">
                                                Lihat Pesan
                                            </a>
                                        </td>
                                      </tr>
                                  @endforeach
                                </tbody>

                            </table>
                            <a href="/message1" class="btn btn-link link-secondary">Lihat Selengkapnya -></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Sewa Barang</h3>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <th>No</th>
                                    <th>Penyewa</th>
                                    <th>Barang Yang Disewa</th>
                                    <th>Tanggal Sewa</th>
                                </thead>
                                <tbody>
                                    @foreach ($sewa as $item)
                                        <tr>
                                            <td>
                                                {{$loop->iteration}}
                                            </td>
                                            <td>
                                                {{$item->penyewa}}
                                            </td>
                                            <td>
                                                {{$item->barang->barang_nama}}
                                            </td>
                                            <td>
                                                {{$item->tgl_sewa}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <tfoot>
                                <a href="/sewa">Lihat Selengkapnya -></a>
                            </tfoot>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Pengembalian Barang</h3>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <th>No</th>
                                    <th>Penyewa</th>
                                    <th>Barang Yang Disewa</th>
                                    <th>Tanggal Pengembalian</th>
                                </thead>
                                <tbody>
                                    @foreach ($pengembalian as $item)
                                        <tr>
                                            <td>
                                                {{$loop->iteration}}
                                            </td>
                                            <td>
                                                {{$item->penyewa}}
                                            </td>
                                            <td>
                                                {{$item->barang->barang_nama}}
                                            </td>
                                            <td>
                                                {{$item->tgl_pengembalian}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <tfoot>
                                <a href="/pengembalian">Lihat Selengkapnya -></a>
                            </tfoot>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Pesanan Mesin</h3>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <th>No</th>
                                    <th>Pemesan</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach ($mesin as $item)
                                        <tr>
                                            <td>
                                                {{$loop->iteration}}
                                            </td>
                                            <td>
                                                {{$item->pemesan}}
                                            </td>
                                            <td>
                                                <a wire:click="pesanan({{$item->id}})" class="btn btn-link link-secondary">Lihat Pesanan</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <tfoot>
                                <a href="/mesin" class="btn btn-link">Lihat Selengkapnya -></a>
                            </tfoot>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Perusahaan Rekanan</h3>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <th>No</th>
                                    <th>Nama Perusahaan</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach ($perusahaan as $item)
                                        <tr>
                                            <td>
                                                {{$loop->iteration}}
                                            </td>
                                            <td>
                                                {{$item->pt_nama}}
                                            </td>
                                            <td>
                                                <a wire:click="detail_perusahaan({{$item->id}})" class="btn btn-link">Detail Perusahaan</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <tfoot>
                                <a href="/perusahaan">Lihat Selengkapnya -></a>
                            </tfoot>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Data Siswa</h3>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>Asal Sekolah</th>
                                </thead>
                                <tbody>
                                    @foreach ($pendaftaran as $item)
                                        <tr>
                                            <td>
                                                {{$loop->iteration}}
                                            </td>
                                            <td>
                                                {{$item->nama}}
                                            </td>
                                            <td>
                                                {{$item->asal_sekolah}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <tfoot>
                                <a href="/pendaftaran">Lihat Selengkapnya -></a>
                            </tfoot>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">

            </div>
        </div>
    </div>
</div>
