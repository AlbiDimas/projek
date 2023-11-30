@if ($show)
    <div class="modal modal-blur fade show" id="modal-default" style="display: block; padding-right: 15px;">
        <div class="modal-dialog modal-xl modal-dialog-centered ">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Lihat Detail Sewa</h4>
        <button wire:click="format" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-5">
                    <img src="/storage/{{$foto_barang}}" width="200px">
                </div>
                <div class="col-md-7">
                    <table class="table">
                        <tr>
                            <th>Tanggal Pengembalian</th>
                            <td>:</td>
                            <td>{{$tgl_pengembalian}}</td>
                        </tr>
                        <tr>
                            <th>Nama Mesin</th>
                            <td>:</td>
                            <td>{{$barang}}</td>
                        </tr>
                        <tr>
                            <th>Penyewa</th>
                            <td>:</td>
                            <td>{{$penyewa}}</td>
                        </tr>
                        <tr>
                            <th>Kontak</th>
                            <td>:</td>
                            <td>{{$kontak}}</td>
                        </tr>

                        <tr>
                            <th>Kondisi</th>
                            <td>:</td>
                            <td>{{$kondisi}}</td>
                        </tr>
                        <tr>
                            <th>Jumlah</th>
                            <td>:</td>
                            <td>{{$qty}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
        <button type="button" wire:click="format" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>

        </div>

        </div>
@endif
