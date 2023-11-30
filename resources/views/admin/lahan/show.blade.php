@include('admin/lahan/show-legalitas')
@include('admin/lahan/show-ktp')

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
                            <th>Nama IKM</th>
                            <td>:</td>
                            <td>{{$nama_ikm}}</td>
                        </tr>
                        <tr>
                            <th>Penanggung Jawab</th>
                            <td>:</td>
                            <td>{{$penanggung_jawab}}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>:</td>
                            <td>{{$alamat}}</td>
                        </tr>
                        <tr>
                            <th>No Hp</th>
                            <td>:</td>
                            <td>{{$no_hp}}</td>
                        </tr>
                        <tr>
                            <th>Lokasi Lahan</th>
                            <td>:</td>
                            <td>{{$lokasi_lahan}}</td>
                        </tr>
                        <tr>
                            <th>luas_lahan</th>
                            <td>:</td>
                            <td>{{$luas_lahan}}</td>
                        </tr>
                        <tr>
                            <th>Legalitas</th>
                            <td>:</td>
                            <td>
                                <a wire:click="show_legalitas({{$lahan_id}})" class="btn btn-sm btn-link link-secondary">Lihat Legalitas</a>
                            </td>
                        </tr>
                        <tr>
                            <th>Bukti KTP</th>
                            <td>:</td>
                            <td>
                                <a wire:click="show_ktp({{$lahan_id}})" class="btn btn-sm  btn-link link-secondary">Lihat Bukti KTP</a>
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
