<div>
    <div class="card card-md">
        <div class="card-body">
          <h2 class="h2 text-center mb-4">Login to your account</h2>
          <form wire:submit.prevent="loginUser" method="get" autocomplete="off" novalidate>
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input wire:model.defer="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="your@email.com" autocomplete="off">
              @error('email')
                  <div class="invalid-feedback">
                      {{$message}}
                  </div>
              @enderror
            </div>
            <div class="mb-2">
              <label class="form-label">
                Password
                <span class="form-label-description">
                  <a href="/password/reset">I forgot password</a>
                </span>
              </label>
              <div class="input-group input-group-flat">
                <input wire:model.defer="password" type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Your password"  autocomplete="off">
              @error('password')
                  <div class="invalid-feedback">
                      {{$message}}
                  </div>
              @enderror
                <span class="input-group-text">
                  <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                  </a>
                </span>
              </div>
            </div>
            <div class="mb-2">
              <label class="form-check">
                <input type="checkbox" class="form-check-input"/>
                <span class="form-check-label">Remember me on this device</span>
              </label>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-yellow w-100">Sign in</button>
            </div>
          </form>
          <div class="text-center text-muted mt-3">
            Don't have account yet? <a href="/register" tabindex="-1">Sign up</a>
          </div>
        </div>
      </div>
</div>
