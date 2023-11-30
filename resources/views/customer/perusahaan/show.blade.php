@if ($show)
    <div class="modal fade show" id="modal-default" style="display: block; padding-right: 15px;">
        <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Lihat Detail Sewa</h4>
        <button type="button" wire:click="format" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="/storage/{{$pt_logo}}" alt="" width="300">
                </div>
                <div class="col-md-8">
                    <table class="table mb-3">
                        <tbody>
                            <tr>
                                <td>Nama Perusahaan</td>
                                <td>:</td>
                                <td>{{$pt_nama}}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{$pt_alamat}}</td>
                            </tr>
                            <tr>
                                <td>Bidang Usaha</td>
                                <td>:</td>
                                <td>{{$pt_bidang}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
        <button type="button" wire:click="format" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="/daftar" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fa fa-user-plus" aria-hidden="true"></i>
            </span>
            Daftar
        </a>
        </div>
        </div>

        </div>

        </div>
@endif
