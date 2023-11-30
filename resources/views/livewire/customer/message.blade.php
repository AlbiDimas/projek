<div class="container">
    @include('component/flash')
    <div class="card text-center">
        <div class="card-header text-capitalize">
          contact us
        </div>
        <div class="card-body">
            <div class="card-text">
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input wire:model="first_name" type="text" class="form-control" placeholder="First Name" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col">
                        <input wire:model="last_name" type="text" class="form-control" placeholder="Last Name" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="row">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <input wire:model="email" type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <textarea wire:model="message" name="message" id="message" cols="30" rows="10" placeholder="Message..." class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <br>
          <a wire:click="store" href="" class="btn btn-primary btn-icon-split float-end">
            <span class="icon text-white-50">
                <i class="fa fa-envelope-open" aria-hidden="true"></i>
            </span>
            Submit
          </a>
        </div>
      </div>
</div>
