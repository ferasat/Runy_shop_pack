<?php

namespace App\Http\Livewire\User\Requests;

use App\Models\User;
use Customer\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;
use Rqsts\Models\RequestDepartment;
use Rqsts\Models\Rqsts;

class FixRequestGust extends Component
{
    use WithFileUploads ;

    public $name , $family , $address , $cell , $department , $pic , $description , $showResult=0 , $rqs_code= null , $rqs_p
    , $message_get_info , $get_code , $title , $showStatus=0 ;

    protected $proxies =  '*';
    protected $queryString = [
        'showStatus' , 'rqs_code'
    ];

    public function mount()
    {
        $department = RequestDepartment::query()->first();
        $this->department = $department->id ;
        if (Auth::check()){
            $this->name = Auth::user()->name ;
            $this->family = Auth::user()->family ;
            $this->address = Auth::user()->address ;
            $this->cell = Auth::user()->cell ;
        }

        if ($this->showStatus == 0){
            $this->showResult = 0 ;
        }elseif ($this->showStatus == 1){
            $this->showResult = 1 ;
        }elseif ($this->showStatus == 2){
            $this->showResult = 2 ;
        }
    }
    public function render()
    {
        $departments = RequestDepartment::all();
        return view('livewire.user.requests.fix-request-gust' , compact('departments'));
    }

    public function updated(){
        $this->validate();
    }

    protected $rules = [
        'name' => 'required',
        'family' => 'required',
        'cell' => 'required|min:9',
        'description' => 'required',
        'pic' => 'max:5124',
    ];

    protected $messages =[
        'name.required' => 'وارد کردن نام الزامی هست.',
        'family.required' => 'وارد کردن نام خانوادگی الزامی هست.',
        'cell.required' => 'وارد کردن شماره تماس الزامی هست.',
        'cell.min' => 'اشتباه هست',
        'pic.max' => 'حجم عکس زیاد هست',
        'pic.image' => 'لطفا عکس بارگذاری کنید',
        'description.required' => 'وارد کردن توضیحات الزامی هست.',
    ];

    public function get_rqs_info()
    {
        $rqs = Rqsts::query()->where('rqs_code' , $this->get_code)->first();
        if ($rqs == null)
            $this->message_get_info = 'کد پیگیری را اشتباه وارد کردید . هیچ اطلاعاتی نیست';
        else $this->message_get_info = null ;

        $this->rqs_p = $rqs ;

        $this->showResult = 2 ;
        $this->showStatus = 2 ;

    }


    public function save()  /// فعلا بلا اسافاده بخاطر باگ در سیستم آپلود در لیرا در لوکال کار می کنه
    {
        $this->validate();

        $users = User::all();
        $not_user = true ;
        foreach ($users as $user){
            if ($this->cell == $user->cell ){
                $not_user = false ;
                $customer_id = $user->id ;
            }
        }

        if ($not_user){
            $newUser = new User();
            $newUser->name = $this->name ;
            $newUser->family = $this->family ;
            $newUser->cell = $this->cell ;
            $newUser->address = $this->address ;
            $newUser->email = $this->cell.'@ms.ir' ;
            $newUser->password = bcrypt($this->cell) ;
            $newUser->save() ;

            $customer_id = $newUser->id ;

            $newCustomer_ = new Customer();
            $newCustomer_->name = $this->name ;
            $newCustomer_->family = $this->family ;
            $newCustomer_->cell = $this->cell ;
            $newCustomer_->address = $this->address ;
            $newCustomer_->email = $this->cell.'@ms.ir' ;
            $newCustomer_->customer_user_id = $customer_id ;
            $newCustomer_->save() ;

        }


        $newReq = new Rqsts();
        $newReq->name = $this->title ;
        $newReq->note = $this->description ;
        $newReq->for_department_id = $this->department ;
        $newReq->user_id = $customer_id ;
        $newReq->status = 'ثبت اولیه' ;
        if ($this->pic !== null){
            $year = now()->year;
            $month = now()->month;
            $day = now()->day;

            $dir = 'public/pic-fix/'.$year.'/'.$month.'/'.$day;
            $nameFile = rand('1' , '9999').'-'.$this->pic->getClientOriginalName();

            $this->pic->storeAs($dir , $nameFile,'local');
            //$reUp = $this->pic->store($dir, 'local', $nameFile);

            //dd($this->pic);

            $urlPic =  'storage/pic-fix/'.$year.'/'.$month.'/'.$day.'/'.$nameFile ;
            //$urlPic =  $this->pic ;
            //log::channel('test')->info('up:'."$urlPic");

            $newReq->files = '    {
                                        "file": [{
                                            "name":       "'.$newReq->name.'",
                                            "url":      "'.$urlPic.'"
                                        }]
                                    }';

        }
        $newReq->save() ;

        $newReq->rqs_code = rand(99,999).$newReq->id ;
        $newReq->save() ;

        $this->rqs_code = $newReq->rqs_code ;
        $this->showResult = 1 ;


    }
}
