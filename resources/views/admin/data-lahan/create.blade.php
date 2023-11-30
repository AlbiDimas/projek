@if ($create)
    <div class="modal modal-blur fade show" id="modal-xl" style="display: block; padding-right: 15px;">
        <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Data Sewa</h4>
        <button wire:click="format" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Lokasi Lahan</label>
                                <div class="col-sm-10">
                                <div class="input-group mb3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <input wire:model="lokasi_lahan" type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Luas Lahan</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
                                        <input wire:model="luas_lahan" type="text" class="form-control" placeholder="Asal Sekolah" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Penanggung Jawab</label>
                                    <div class="col-sm-10">
                                    <div class="input-group mb3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                        <input wire:model="penanggung_jawab" type="text" class="form-control" placeholder="Nomor Telpon" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Foto Lahan</label>
                                    <div class="col-sm-10">
                                    <div class="input-group mb3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                        <input wire:model="foto_lahan" type="file" class="form-control" placeholder="Alamat" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    </div>
                            </div>
            </form>
        </div>
        <div class="modal-footer justify-content-between">
            <button wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button wire:click="store" type="button" class="btn btn-primary">Submit</button>
        </div>
        </div>

        </div>

    </div>
@endif
