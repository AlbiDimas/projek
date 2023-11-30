@if ($create)

    <div class="modal modal-blur fade show" id="modal-report" tabindex="-1" style="display: block;" role="dialog" aria-modal="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Data Sewa</h4>
        <button wire:click="format" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="row">
                    <div class="row">
                        <div class="col">
                            <label class="form-label" for="nama_ikm">Nama IKM</label>
                            <input wire:model="nama_ikm" type="text" name="nama_ikm" id="nama_ikm" class="form-control">
                            @error('nama_ikm') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col">
                            <label class="form-label" for="penanggung_jawab">Penanggung Jawab</label>
                            <input wire:model="penanggung_jawab" type="text" name="penanggung_jawab" id="penanggung_jawab" class="form-control">
                            @error('penanggung_jawab') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label class="form-label" for="alamat">Alamat</label>
                            <input wire:model="alamat" type="text" name="alamat" id="alamat" class="form-control">
                            @error('alamat') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col">
                            <label for="no_hp" class="form-label">Nomor Hp</label>
                            <input wire:model="no_hp" type="text" name="no_hp" id="no_hp" class="form-control">
                            @error('no_hp') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col">
                            <label for="lokasi_lahan" class="form-label">Lokasi Lahan</label>
                            <input wire:model="lokasi_lahan" type="text" name="lokasi_lahan" id="lokasi_lahan" class="form-control">
                            @error('lokasi_lahan') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="luas_lahan" class="form-label">Luas Lahan</label>
                            <input type="text" wire:model="luas_lahan" name="luas_lahan" id="luas_lahan" class="form-control">
                            @error('luas_lahan') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="" class="form-label">Legalitas</label>
                            <input wire:model="legalitas1" type="file" class="form-control">
                            @error('legalitas1') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col">
                            <label for="" class="form-label">KTP</label>
                            <input wire:model="ktp" type="file" class="form-control">
                            @error('ktp') <span class="text-danger">{{ $message }}</span> @enderror
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

