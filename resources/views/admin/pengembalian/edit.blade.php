@if ($edit)

    <div class="modal modal-blur fade show" id="modal-xl" style="display: block; padding-right: 15px;">
        <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Data Pengembalian Barang</h4>
        <button wire:click="format" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="row">
                  <div class="col">
                    <label for="tgl_pengembalian">Tanggal Pengembalian</label>
                    <input wire:model="tgl_pengembalian" type="date" class="form-control"  name="tgl_pengembalian">
                    @error('tgl_pengembalian') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                  <div class="col">
                    <label for="barang_id">Barang Yang Disewa</label>
                    <select wire:model="barang_id" name="idbarang"  id="barang" class="form-control">
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
                        <label for="penyewa">Penyewa</label>
                        <input wire:model="penyewa" type="text" class="form-control"  name="penyewa">
                        @error('penyewa') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                        <label for="kontak">Kontak</label>
                        <input wire:model="kontak" type="text" class="form-control"  name="kontak">
                        @error('kontak') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col">
                        <label for="foto_barang">Foto Barang</label>
                        <input wire:model="foto_barang" type="file" class="form-control"  name="foto_barang">
                        @error('foto_barang') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                        <label for="kondisi_id">Kondisi Barang</label>
                        <select wire:model="kondisi_id" name="kondisi_id" id="kondisi_id" class="form-control">
                            <option selected value="">Kondisi Barang</option>
                            @foreach ($kondisi as $item)
                                <option value="{{$item->id}}">{{$item->kondisi}}</option>
                            @endforeach
                        </select>
                        @error('kondisi_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                        <label for="qty">Jumlah</label>
                        <input wire:model="qty" type="number" name="qty" id="qty" class="form-control">
                        @error('qty') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <br>
              </form>
        </div>
        <div class="modal-footer justify-content-between">
        <button wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button wire:click="update({{$pengembalian_id}})" type="button" class="btn btn-primary">Submit</button>
        </div>
        </div>

        </div>

        </div>


@endif
