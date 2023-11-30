@if ($pesanan)

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
                    <img src="/storage/{{$foto_mesin}}" alt="" width="400px">
                </div>
                <div class="col-md-7">
                    <table class="table">
                        <tr>
                            <th>Nama Mesin</th>
                            <td>:</td>
                            <td>{{$mesin_nama}}</td>
                        </tr>
                        <tr>
                            <th>Pemesan</th>
                            <td>:</td>
                            <td>{{$pemesan}}</td>
                        </tr>
                        <tr>
                            <th>Spesifikasi</th>
                            <td>:</td>
                            <td>{{$mesin_spesifikasi}}</td>
                        </tr>
                        <tr>
                            <th>Jumlah</th>
                            <td>:</td>
                            <td>{{$mesin_jumlah}}</td>
                        </tr>
                        <tr>
                            <td>Estimasi Selesai</td>
                            <td>:</td>
                            <td>{{$tgl_selesai}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
        <button type="button" wire:click="format" class="btn btn-link link-secondary float-end" data-dismiss="modal">Close</button>
        </div>
        </div>

        </div>

        </div>
@endif
