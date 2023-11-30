@if ($edit)

    <div class="modal modal-blur fade show" id="modal-report" tabindex="-1" style="display: block;" role="dialog" aria-modal="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Data Sewa</h4>
        <button wire:click="format" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="row">
                  <div class="col">
                    <label for="tgl_sewa" class="form-label">Tanggal Sewa</label>
                    <input wire:model="tgl_sewa" type="date" class="form-control" placeholder="Tanggal Sewa" name="tgl_sewa">
                    @error('tgl_sewa') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                  <div class="col">
                    <label for="barang_id" class="form-label">Barang Yang Disewa</label>
                    <select wire:model="barang_id" name="idbarang"  id="barang" class="form-select">
                        <option selected value="">Pilih Barang</option>
                        @foreach ($barang as $item)
                            <option value="{{$item->id}}">{{$item->barang_nama}}</option>
                        @endforeach
                      </select>
                      @error('barang_id') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="penyewa" class="form-label">Penyewa</label>
                        <input wire:model="penyewa" type="text" class="form-control" placeholder="Penyewa" name="penyewa">
                        @error('penyewa') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input wire:model="alamat" type="text" class="form-control" placeholder="Alamat" name="alamat">
                        @error('alamat') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col">
                        <label for="kontak" class="form-label">Kontak</label>
                        <input wire:model="kontak" type="text" class="form-control" placeholder="Tanggal Sewa" name="kontak">
                        @error('kontak') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                        <label for="nilai_sewa" class="form-label">Nilai Sewa</label>
                        <input wire:model="nilai_sewa" type="number" class="form-control" placeholder="Nilai Sewa" name="nilai_sewa">
                        @error('nilai_sewa') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col">
                        <label for="legalitas" class="form-label">Legalitas</label>
                        <input wire:model="legalitas" type="file" class="form-control" placeholder="Legalitas" name="legalitas">
                        @error('legalitas') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                        <label for="tgl_kembali" class="form-label">Tanggal Pengembalian</label>
                        <input wire:model="tgl_kembali" type="date" class="form-control" placeholder="Tanggal Pengembalian" name="tgl_kembali">
                        @error('tgl_kembali') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                        <label for="qty" class="form-label">Jumlah</label>
                        <input wire:model="qty" type="number" id="qty" name="qty" placeholder="Jumlah" class="form-control">
                        @error('qty') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                  </div>
              </form>
        </div>
        <div class="modal-footer justify-content-between">
        <button wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button wire:click="update({{$sewa_id}})" type="button" class="btn btn-primary">Submit</button>
        </div>
        </div>

        </div>

        </div>


@endif
