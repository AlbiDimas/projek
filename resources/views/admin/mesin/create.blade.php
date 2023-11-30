@if ($create)
    <div class="modal modal-blur fade show" id="modal-xl" style="display: block; padding-right: 15px;">
        <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Pembuatan Mesin</h4>
        <button wire:click="format" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="row">
                  <div class="col">
                    <label for="mesin_nama">Nama Mesin</label>
                    <input wire:model="mesin_nama" type="text" class="form-control"  name="mesin_nama">
                    @error('mesin_nama') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                  <div class="col">
                    <label for="pemesan">Pemesan</label>
                    <input wire:model="pemesan" type="text" class="form-control"  name="pemesan">
                    @error('pemesan') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                  <div class="col">
                    <label for="mesin_jumlah">Jumlah</label>
                    <input wire:model="mesin_jumlah" type="text" class="form-control"  name="mesin_jumlah">
                    @error('mesin_jumlah') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                </div>
                <br>
                  <div class="row">
                    <div class="col">
                        <label for="kategori_id">Kategori</label>
                         <select wire:model="kategori_id"  id="kategori" class="form-control">
                            <option selected value="">Pilih Barang</option>
                            @foreach ($kategori as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                          </select>
                      @error('kategori_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                        <label for="foto_mesin">Foto Mesin</label>
                        <input wire:model="foto_mesin" type="file" name="foto_mesin" id="foto_mesin" class="form-control">
                    </div>
                    <div class="col">
                        <label for="tgl_selesai">Estimasi Selesai</label>
                        <input wire:model="tgl_selesai" type="date" name="tgl_selesai" id="tgl_selesai" class="form-control">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col">
                        <label for="mesin_spesifikasi">Spesifikasi</label>
                        <textarea wire:model="mesin_spesifikasi" name="mesin_spesifikasi" id="mesin_spesifikasi" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                  </div>
                  <br>
                <br>
              </form>
        </div>
        <div class="modal-footer justify-content-between">
        <button wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <span wire:click="store" class="btn btn-primary">Save changes</span>
        </div>
        </div>

        </div>

        </div>
@endif
