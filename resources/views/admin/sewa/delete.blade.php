@if ($delete)
    <div class="modal fade show" id="modal-default" style="display: block;" role="dialog" aria-modal="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Hapus Data</h4>
        <button type="button" wire:click="format" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <p>Anda yakin ingin menghapus data&hellip;?</p>
        </div>
        <div class="modal-footer justify-content-between">
        <button type="button" wire:click="format" class="btn btn-link link-secondary" data-dismiss="modal">Close</button>
        <button type="button" wire:click="destroy({{$sewa_id}})" class="btn btn-danger">Hapus</button>
        </div>
        </div>

        </div>

        </div>
@endif
