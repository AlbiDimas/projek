@if ($detail_siswa)

    <div class="modal modal-blur fade show" id="modal-report" tabindex="-1" style="display: block;" role="dialog" aria-modal="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Lihat Detail Sewa</h4>
        <button wire:click="format" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-7">
                    <table class="table">
                        <tr>
                            <th>Nama Siswa</th>
                            <td>:</td>
                            <td>{{$nama_siswa}}</td>
                        </tr>
                        <tr>
                            <th>Asal Sekolah</th>
                            <td>:</td>
                            <td>{{$asal_sekolah}}</td>
                        </tr>
                        <tr>
                            <th>No. Telpon</th>
                            <td>:</td>
                            <td>{{$kontak}}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>:</td>
                            <td>{{$alamat}}</td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td>{{$tgl_lahir}}</td>
                        </tr>
                        <tr>
                            <td>Identitas</td>
                            <td>:</td>
                            <td>
                                <a href="">Lihat Identitas</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td>
                                @if ($status_id == 1)
                                    <span class="status status-green">Confirm</span>
                                @elseif ($status_id == 2)
                                    <span class="status status-red">Unconfirm</span>
                                @else
                                    <span class="status status-yellow">Belum Confirm</span>
                                @endif
                            </td>
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
