@if ($create)

    <div class="modal fade show" id="modal-xl" style="display: block; padding-right: 15px;">
        <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Data Sewa</h4>
        <button wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="row">
                  <div class="col">
                    <label for="nama">Nama Lengkap</label>
                    <input wire:model="nama" type="text" class="form-control" name="nama">
                    @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                  <div class="col">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <input wire:model="asal_sekolah" type="text" name="asal_sekolah" id="asal_sekolah" class="form-control">
                      @error('asal_sekolah') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="kontak">Kontak</label>
                        <input wire:model="kontak" type="text" class="form-control"  name="kontak">
                        @error('kontak') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                        <label for="alamat">Alamat</label>
                        <input wire:model="alamat" type="text" class="form-control"  name="alamat">
                        @error('alamat') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input wire:model="tempat_lahir" type="text" class="form-control"  name="tempat_lahir">
                        @error('tempat_lahir') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input wire:model="tgl_lahir" type="date" class="form-control"  name="tgl_lahir">
                        @error('tgl_lahir') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col">
                        <label for="perusahaan_id">Perusahaan Tujuan</label>
                        <select wire:model="perusahaan_id" class="form-control" name="perusahaan_id"  id="perusahaan_id">
                            <option selected value="">Pilih Perusahaan</option>
                            @foreach ($perusahaan as $item)
                                <option value="{{$item->id}}">{{$item->pt_nama}}</option>
                            @endforeach
                        </select>
                        @error('perusahaan_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                        <label for="identitas">Bukti Identitas</label>
                        <input wire:model="identitas" type="file" class="form-control"  name="identitas">
                        @error('identitas') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                        <label for="status_id">status</label>
                        <select wire:model="status_id" name="status_id" id="status_id" class="form-control">
                            <option selected value="">Status</option>
                            @foreach ($status as $item)
                                <option value="{{$item->id}}">{{$item->status}}</option>
                            @endforeach
                        </select>
                        @error('status') <span class="text-danger">{{ $message }}</span> @enderror
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
