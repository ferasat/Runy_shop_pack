<div class="card mb-3">
    <div class="card-body mb-n2 border-last-none h-100">
        <div class="mb-3">
            <label class="form-label">عنوان</label>
            <input type="text" class="form-control" wire:model.blur="name_">
            @error('name_') {{$message}} @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">لینک</label>
            <input type="text" class="form-control" wire:model.blur="slug">

        </div>
        <div class="d-flex justify-content-end">
            <a href="{{ asset('/product/'.$slug) }}" target="_blank" class="btn btn-icon btn-icon-end btn-tertiary active-scale-up" type="button">
                <span >دیدن محصول</span>
                <svg class="icon-svg-panel" viewBox="0 0 32 32" enable-background="new 0 0 32 32" id="Filled_Line" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16,7C9.934,7,4.798,10.776,3,16c1.798,5.224,6.934,9,13,9s11.202-3.776,13-9 C27.202,10.776,22.066,7,16,7z" fill="#FFFFFF" id="XMLID_937_"></path><path d="M6,16c1.647-4.787,6.1-8.348,11.5-8.913C17.006,7.036,16.508,7,16,7 C9.934,7,4.798,10.776,3,16c1.798,5.224,6.934,9,13,9c0.508,0,1.006-0.036,1.5-0.087C12.1,24.348,7.647,20.787,6,16z" fill="#dec2ff" id="XMLID_368_"></path><path d="M16,7c-2.142,0-4.164,0.479-5.968,1.318C10.989,8.115,11.979,8,13,8 c6.066,0,11.202,3.776,13,9c-1.163,3.379-3.727,6.145-7.032,7.682C23.696,23.68,27.505,20.346,29,16C27.202,10.776,22.066,7,16,7z" fill="#dec2ff" id="XMLID_369_"></path><path d=" M16,7C9.934,7,4.798,10.776,3,16c1.798,5.224,6.934,9,13,9s11.202-3.776,13-9C27.202,10.776,22.066,7,16,7z" fill="none" id="XMLID_830_" stroke="#6c429a" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path><circle cx="16" cy="16" fill="#6c429a" id="XMLID_826_" r="5"></circle><path d="M16.312,20.494c-2.761,0-5-2.239-5-5c0-0.884,0.249-1.702,0.652-2.423 C11.364,13.896,11,14.902,11,16c0,2.761,2.239,5,5,5c1.877,0,3.493-1.047,4.348-2.577C19.439,19.673,17.976,20.494,16.312,20.494z" fill="#6c429a" id="XMLID_439_"></path><path d="M16,11c-1.636,0-3.075,0.797-3.988,2.012C12.848,12.385,13.875,12,15,12 c2.761,0,5,2.239,5,5c0,1.125-0.385,2.152-1.012,2.988C20.203,19.075,21,17.636,21,16C21,13.239,18.761,11,16,11z" fill="#4D3F80" id="XMLID_440_"></path><circle cx="17" cy="15" fill="#FFFFFF" r="1.5"></circle></g></svg>
            </a>
        </div>
    </div>
</div>
