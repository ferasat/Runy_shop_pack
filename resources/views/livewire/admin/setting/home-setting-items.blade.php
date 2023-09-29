<tr wire:loading.class="bg-warning">
    <th scope="row"><input class="form-control" type="text" wire:model.live.blur="name"></th>
    <td><input class="form-control" type="text" wire:model.live.blur="name_text"></td>
    <td class="text-center">
        <div class="form-switch">
            <input class="form-check-input" type="checkbox" wire:model.live.blur="autoload" @if($setting->autoload == 1) checked @endif>
        </div>
    </td>
    <td><textarea class="form-control text-lg-start" type="text" wire:model.live.blur="value" dir="ltr">{!! $setting->value !!}</textarea></td>
    <td><button class="btn btn-success" wire:click.privent="save({{$setting->id}})">ذخیره</button></td>
</tr>
