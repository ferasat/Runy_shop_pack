<div class="">
    <div class="row ">
        <div class="col-xl-9 mb-5">
            @if($status_page == 0)
            <section class="scroll-section" id="listPost">
                <div class="card h-100-card">
                    <div class="card-body mb-n2 border-last-none h-100">
                        @foreach($employees as $employee)
                            @livewire('admin.emp.row-employee' , [ 'employee' => $employee ]  , key($employee->id))
                        @endforeach
                    </div>
                </div>
            </section>
            @elseif($status_page == 1)
                @livewire('admin.user.edit-user' , ['user'=>$employee ] )
            @endif
        </div>
        <div class="col-xl-3 mb-5">
            <div class="card ">
                <div class="card-header">دسترسی ها</div>
                <div class="card-body mb-n2 border-last-none">

                    <!-- Button Trigger -->
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#addEmployee">
                        اضافه کردن کارمند
                    </button>
                    <!-- Modal  Launch static backdrop modal-->
                    @livewire('admin.emp.add-employee' )

                </div>
            </div>
        </div>
    </div>

</div>
