<div class="row">
    <div class="col-9 d-flex justify-content-between m-auto mt-5">
        <div class="col-sm-6 col-md-3 p-2">
            <div class="card bg-info">
                تعداد مدیران :
            </div>
        </div>
        <div class="col-sm-6 col-md-3 p-2">
            <div class="card bg-warning">
                تعداد کارمندان :
            </div>
        </div>
        <div class="col-sm-6 col-md-3 p-2">
            <div class="card bg-color-green">
                تعداد مشتریان :
            </div>
        </div>
        <div class="col-sm-6 col-md-3 p-2">
            <div class="card ">
                تعداد کل کاربران :
            </div>
        </div>
    </div>
    @if($status == 'index')
        <div class="col-9 m-auto mt-5">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">تصویر</th>
                            <th scope="col">نام و نام خانوادگی</th>
                            <th scope="col">سمت</th>
                            <th scope="col">سطح دسترسی</th>
                            <th scope="col">وضعیت</th>
                            <th scope="col">عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr id="{{ $user->id }}" wire:key="{{$user->id}}">
                                <th scope="row">{{ $user->id }}</th>
                                <td><img class="w-50px rounded-circle" src="{{ asset($user->pic) }}" alt="{{ $user->name }}"></td>
                                <td>{{ $user->name.' '.$user->family }}</td>
                                <td>{{ $user->levelUser }}</td>
                                <td>{{ $user->levelPermission }}</td>
                                <td>
                                    @if($user->status == 'active')
                                        <button class="btn btn-runy-success" wire:click.prevent="changeStatus({{ $user->id }})">فعال</button>
                                    @else
                                        <button class="btn btn-secondary" wire:click.prevent="changeStatus({{ $user->id }})">غیر فعال</button>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-outline-warning" wire:click.prevent="editUser({{$user->id}})">ویرایش</button>
                                    <button class="btn btn-danger" wire:click.prevent="deleteUser({{$user->id}})">حذف</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    @elseif($status == 'edit')
        <div class="col-9 m-auto mt-5">
            @livewire('admin.user.edit-user' , ['user'=>$user_edit ])
        </div>
    @endif

</div>
