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
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                <div class="input-group mb3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <input wire:model="nama" type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Asal Sekolah</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
                                        <input wire:model="asal_sekolah" type="text" class="form-control" placeholder="Asal Sekolah" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Telpon</label>
                                    <div class="col-sm-10">
                                    <div class="input-group mb3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                        <input wire:model="kontak" type="text" class="form-control" placeholder="Nomor Telpon" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                    <div class="input-group mb3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                        <input wire:model="alamat" type="text" class="form-control" placeholder="Alamat" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-10">
                                    <div class="input-group mb3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-globe" aria-hidden="true"></i></span>
                                        <input wire:model="tempat_lahir" type="text" class="form-control" placeholder="Tempat Lahir" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                    <div class="input-group mb3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                        <input wire:model="tgl_lahir" type="date" class="form-control" placeholder="Tanggal Lahir" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Perusahaan Tujuan</label>
                                    <div class="col-sm-10">
                                    <div class="input-group mb3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
                                        <select wire:model="perusahaan_id" name="" id="" class="form-control">
                                            <option selected value="">Pilih Perusahaan</option>
                                            @foreach ($perusahaan as $item)
                                                <option value="{{$item->id}}">{{$item->pt_nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Bukti Identitas</label>
                                    <div class="col-sm-10">
                                    <div class="input-group mb3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-file" aria-hidden="true"></i></span>
                                        <input wire:model="identitas" type="file" class="form-control" placeholder="Bukti Identitas" aria-label="Username" aria-describedby="basic-addon1">
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

