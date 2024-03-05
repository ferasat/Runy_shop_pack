<div>
    @if($count_wms < 1 )
        <h4 class="text-danger">هیچ انباری تعریف نشده است </h4>
    @else
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">نام</th>
                <th scope="col">نوع</th>
                <th scope="col">ظرفیت</th>
            </tr>
            </thead>
            <tbody>
            @foreach($wms as $wm)
            <tr>
                <th scope="row">{{ $wm->id }}</th>
                <td>
                    <div type="button"  data-bs-toggle="modal" data-bs-target="#editWMS{{$wm->id}}">
                        {{ $wm->title }}
                    </div>
                    <div class="modal fade" id="editWMS{{$wm->id}}" tabindex="-1" aria-labelledby="editWMS{{$wm->id}}Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="editWMS{{$wm->id}}Label">انبار : {{ $wm->title }}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    @livewire('admin.rwms.warehousing.add-warehousing' , ['wm'=>$wm , 'edit_status'=>true])
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>{{ $wm->type }}</td>
                <td>
                    @if($wm->capacity == 0)
                        بی نهایت
                    @else
                        {{ $wm->capacity }}
                    @endif
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
