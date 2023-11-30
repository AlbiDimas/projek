@if ($create)
    <div class="modal fade show" id="modal-xl" style="display: block; padding-right: 15px;">
        <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Data Pemesan Mesin</h4>
        <button wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="row">
                  <div class="col">
                    <label for="nama">Pemesan</label>
                    <input wire:model="nama" type="text" class="form-control"  name="nama">
                    @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                  <div class="col">
                    <label for="alamat">Alamat</label>
                    <input wire:model="alamat" type="text" class="form-control"  name="alamat">
                    @error('alamat') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                  <br>
                  <div class="row">
                    <div class="col">
                        <label for="mesin">Mesin Yang Dipesan</label>
                        <select wire:model="mesin_id"  id="mesin" class="form-control">
                            <option selected value="">Pilih Mesin</option>
                            @foreach ($mesin as $item)
                                <option value="{{$item->id}}">{{$item->mesin_nama}}</option>
                            @endforeach
                        </select>
                      @error('mesin_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                      <label for="no_kontrak">Nomor Kontrak</label>
                      <input wire:model="no_kontrak" type="text" class="form-control"  name="no_kontrak">
                      @error('no_kontrak') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                      <label for="tgl_kontrak">Tanggal Kontrak</label>
                      <input wire:model="tgl_kontrak" type="date" name="tgl_kontrak" id="tgl_kontrak" class="form-control">
                      @error('tgl_kontrak') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                        <label for="nilai_kontrak">Nilai Kontrak</label>
                        <input wire:model="nilai_kontrak" type="text" class="form-control"  name="nilai_kontrak">
                        @error('nilai_kontrak') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                        <label for="foto_kontrak">Foto Kontrak</label>
                        <input wire:model="foto_kontrak" type="file" name="foto_kontrak" id="foto_kontrak" class="form-control">
                        @error('foto_kontrak') <span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                  </div>
                </form>
                </div>

                <div class="modal-footer justify-content-between">
                    <button wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <span wire:click="store" class="btn btn-primary">Save changes</span>
                    </div>

        </div>

        </div>

        </div>

        </div>
@endif
