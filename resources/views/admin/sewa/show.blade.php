@if ($show)
    <div class="modal modal-blur fade show" id="modal-report" tabindex="-1" style="display: block;" role="dialog" aria-modal="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Lihat Detail Sewa</h4>
        <button wire:click="format" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-5">
                    <img src="/storage/{{$legalitas}}" width="400px">
                </div>
                <div class="col-md-7">
                    <table class="table">
                        <tr>
                            <th>Tanggal Sewa</th>
                            <td>:</td>
                            <td>{{$tgl_sewa}}</td>
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
                            <th>Alamat</th>
                            <td>:</td>
                            <td>{{$alamat}}</td>
                        </tr>
                        <tr>
                            <th>kontak</th>
                            <td>:</td>
                            <td>{{$kontak}}</td>
                        </tr>
                        <tr>
                            <th>nilai_sewa</th>
                            <td>:</td>
                            <td>{{$nilai_sewa}}</td>
                        </tr>
                        <tr>
                            <th>tgl_sewa</th>
                            <td>:</td>
                            <td>{{$tgl_sewa}}</td>
                        </tr>
                        <tr>
                            <th>qty</th>
                            <td>:</td>
                            <td>{{$qty}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
        <button type="button" wire:click="format" class="btn btn-link link-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>

        </div>

        </div>
@endif
