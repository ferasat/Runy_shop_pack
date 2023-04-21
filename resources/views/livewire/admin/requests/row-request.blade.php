<div class="border-bottom border-separator-light mb-2 pb-2">
    <div class="row g-0 sh-6">
        <div class="col-auto">
            <div class="badge p-3 bg-warning">
                {{ $request->rqs_code }}
            </div>
        </div>
        <div class="col">
            <div class="card-body d-flex flex-row pt-0 pb-0 ps-0 pe-3 h-100 align-items-center justify-content-between">
                <div class="d-flex flex-column">
                    <div>عنوان : {{ $request->name }}</div>
                    <div class="text-small text-muted">وضعیت : {{ $request->status }}</div>
                </div>
                <div class="d-flex">

                    <a class="btn btn-outline-info btn-sm ms-1"  href="{{asset('/dashboard/rqsts/show/'.$request->id)}}" type="button" target="_blank">دیدن</a>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-danger btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#rqsSponsor{{ $request->rqs_code }}">
                        مسئول: {{ fullName($request->sponsor_id) }}
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="rqsSponsor{{ $request->rqs_code }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="rqsSponsor{{ $request->rqs_code }}Label" aria-hidden="true" wire:ignore>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="rqsSponsor{{ $request->rqs_code }}Label">مسئول رسیدگی به درخواست : {{ $request->name }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">کارمندان</label>
                                        <select class="form-control" wire:model="employee">
                                            @foreach($employees as $employee)
                                                <option value="{{$employee->id}}">{{ $employee->name.' '.$employee->family }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
                                    <button type="button" class="btn btn-primary" wire:click.prevent="save()">ذخیره</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
