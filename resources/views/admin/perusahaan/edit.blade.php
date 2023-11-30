@if ($edit)

    <div class="modal modal-blur fade show" id="modal-xl" style="display: block; padding-right: 15px;">
        <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Data Perusahaan</h4>
        <button wire:click="format" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="row">
                  <div class="col">
                    <label for="pt_logo">Logo</label>
                    <input wire:model="pt_logo" type="file" class="form-control"  name="pt_logo">
                    @error('pt_logo') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                  <div class="col">
                    <label for="pt_nama">Nama Perusahaan</label>
                    <input wire:model="pt_nama" type="text" name="pt_nama" id="pt_nama" class="form-control">
                      @error('pt_nama') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="pt_alamat">Alamat</label>
                        <input wire:model="pt_alamat" type="text" class="form-control"  name="pt_alamat">
                        @error('pt_alamat') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                        <label for="pt_number">Nomor Telpon</label>
                        <input wire:model="pt_number" type="text" class="form-control"  name="pt_number">
                        @error('pt_number') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                        <label for="pt_cp">Contact Person</label>
                        <input wire:model="pt_cp" type="text" name="pt_cp" id="pt_cp" class="form-control">
                        @error('pt_cp') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col">
                        <label for="pt_bidang">Deskripsi Perusahaan</label>
                        <textarea wire:model="pt_bidang" name="pt_bidang" id="pt_bidang" cols="30" rows="10" class="form-control">...</textarea>
                    </div>
                  </div>
                  <br>
              </form>
        </div>
        <div class="modal-footer justify-content-between">
        <button wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button wire:click="update({{$perusahaan_id}})" type="button" class="btn btn-primary">Submit</button>
        </div>
        </div>

        </div>

        </div>


@endif
