<main class="main container">

    <div class="row justify-content-center align-items-center">
      <form action="" class="bg_blur_light p-4 col-12 col-md-6 my-5 shadow ">
        <i class="fas fa-user-check fa-3x d-block text-center my-3"></i>
        <h5 class="text-center">فرم ورود</h5>
        <div class="form-group row justify-content-center">
          <input wire:model='data.email' type="text" class="form-control rounded_5 col-10 col-md-8 shadow" placeholder="ایمیل">
        </div>
        @error('data.email')
        <small class="d-block text-danger w-100 text-center">{{ $message }}</small>
        @enderror
        <div class="form-group row justify-content-center">
          <input wire:model='data.password' type="text" class="form-control rounded_5 col-10 col-md-8 shadow" placeholder="کلمه عبور">
        </div>
        @error('data.password')
        <small class="d-block text-danger w-100 text-center">{{ $message }}</small>
        @enderror
        <div class="form-group row justify-content-center">
          <input wire:model='data.remamber' type="checkbox" class="form-control outline_0 box_shadow_0 h-auto">
          مرا بخاطر بسپار
        </div>
        <div class="form-group row justify-content-center">
          <button wire:click='login' type="button" class="btn btn-success rounded_5 px-5 shadow-sm">ورود</button>
        </div>
      </form>

    </div>

  </main>
