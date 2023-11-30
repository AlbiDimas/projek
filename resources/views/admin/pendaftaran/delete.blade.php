@if ($delete)
    <div class="modal fade show" id="modal-default" style="display: block; padding-right: 17px;">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Hapus Barang</h4>
        <button wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <p>Anda yakin?&hellip;</p>
        </div>
        <div class="modal-footer justify-content-between">
        <button wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button wire:click="destroy({{$pendaftaran_id}})" type="button" class="btn btn-danger">Hapus</button>
        </div>
        </div>

        </div>

        </div>
@endif
