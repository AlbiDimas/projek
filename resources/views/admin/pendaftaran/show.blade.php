@include('admin/pendaftaran/show-identitas')
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
                <div class="col">
                    <table class="table">
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>{{$nama}}</td>
                        </tr>
                        <tr>
                            <th>Asal Sekolah</th>
                            <td>:</td>
                            <td>{{$asal_sekolah}}</td>
                        </tr>
                        <tr>
                            <th>Kontak</th>
                            <td>:</td>
                            <td>{{$kontak}}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>:</td>
                            <td>{{$alamat}}</td>
                        </tr>
                        <tr>
                            <th>Tempat Lahir</th>
                            <td>:</td>
                            <td>{{$tempat_lahir}}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td>:</td>
                            <td>{{$tgl_lahir}}</td>
                        </tr>
                        <tr>
                            <th>Perusahaan Tujuan</th>
                            <td>:</td>
                            <td>
                                {{$perusahaan}}
                            </td>
                        </tr>
                        <tr>
                            <th>Identitas</th>
                            <td>:</td>
                            <td>
                                <a wire:click="show_identitas({{$pendaftaran_id}})" class="btn btn-sm  btn-link link-secondary">Lihat Identitas</a>
                            </td>
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
