<div class="container">
<div class="row my-5 py-5">
    <div class="col-6 mx-auto">
        @if($showError)
            <span class="alert alert-danger">شما قبلا در این نظرسنجی شرکت کردید</span>
        @else
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-2">شرکت در نظرسنجی</h3>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="first_name" class="form-label">نام</label>
                            <input type="text" class="form-control" id="first_name" wire:model.lazy="first_name">
                            @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="last_name" class="form-label">نام خانوادگی</label>
                            <input type="text" class="form-control" id="last_name"  wire:model.lazy="last_name">
                            @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="mobile" class="form-label">شماره موبایل</label>
                            <input type="text" class="form-control" id="mobile"  wire:model.lazy="mobile">
                            @error('mobile') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary" wire:click="go_to_poll">شرکت در نظرسنجی</button>
                    </div>
                </div>
            </div>
        @endif

    </div>
</div>
</div>
