<tr wire:loading.class="bg-warning">
    <th scope="row"><input class="form-control" type="text" wire:model.lazy="name"></th>
    <td><input class="form-control" type="text" wire:model.lazy="name_text"></td>
    <td class="text-center">
        <div class="form-switch">
            <input class="form-check-input" type="checkbox" wire:model.lazy="autoload" @if($setting->autoload == 1) checked @endif>
        </div>
    </td>
    <td><textarea class="form-control text-lg-start" type="text" wire:model.lazy="value" dir="ltr">{!! $setting->value !!}</textarea></td>
    <td><button class="btn btn-success" wire:click.privent="save({{$setting->id}})">ذخیره</button></td>
</tr>
