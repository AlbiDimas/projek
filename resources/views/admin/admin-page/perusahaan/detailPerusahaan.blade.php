@if ($detail_perusahaan)

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
                    <img src="/storage/{{$pt_logo}}" alt="" width="400px">
                </div>
                <div class="col-md-7">
                    <table class="table">
                        <tr>
                            <th>Nama Perusahaan</th>
                            <td>:</td>
                            <td>{{$pt_nama}}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>:</td>
                            <td>{{$pt_alamat}}</td>
                        </tr>
                        <tr>
                            <th>No. Telpon</th>
                            <td>:</td>
                            <td>{{$pt_number}}</td>
                        </tr>
                        <tr>
                            <th>Contact Person</th>
                            <td>:</td>
                            <td>{{$pt_cp}}</td>
                        </tr>
                        <tr>
                            <td>Bidang Perusahaan</td>
                            <td>:</td>
                            <td>{{$pt_bidang}}</td>
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
