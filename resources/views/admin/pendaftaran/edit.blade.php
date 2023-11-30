@if ($edit)

    <div class="modal modal-blur fade show" id="modal-report" style="display: block; padding-right: 15px;">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Data Sewa</h4>
        <button wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="">
                <label for="" class="form-label">Status</label>
                <select wire:model="status_id" name="status_id" id="status_id" class="form-control">
                    <option selected value="">Status</option>
                    @foreach ($status as $item)
                        <option value="{{$item->id}}">{{$item->status}}</option>
                    @endforeach
                </select>
            </form>
        </div>
        <div class="modal-footer justify-content-between">
        <button wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button wire:click="update({{$pendaftaran_id}})" type="button" class="btn btn-primary">Submit</button>
        </div>
        </div>

        </div>

        </div>


@endif
