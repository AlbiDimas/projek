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
                    <div class="col">
                        <label for="nama">Nama Barang</label>
                        <input wire:model="nama" type="text" name="nama" id="nama" class="form-control">
                        @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                        <label for="jumlah">Jumlah Barang</label>
                        <input wire:model="jumlah" type="number" name="jumlah" id="jumlah" class="form-control">
                        @error('jumlah') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="stock">Stock Barang</label>
                            <input wire:model="stock" type="number" name="stock" id="stock" class="form-control">
                            @error('stock') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col">
                            <label for="kategori">Kategori</label>
                            <select wire:model="kategori_id" name="kategori" id="kategori" class="form-control">
                                <option  selected value="">Pilih Kategori</option>
                                @foreach ($kategori as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                            @error('kategori') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col">
                            <label for="foto">Foto Barang</label>
                            <input wire:model="foto" type="file" name="foto" id="foto" class="form-control">
                            @error('foto') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="deskripsi">Deskripsi Barang</label>
                            <textarea wire:model="deskripsi" name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control">Deskripsi</textarea>
                            @error('deskripsi') <span class="text-danger">{{ $message }}</span> @enderror
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

