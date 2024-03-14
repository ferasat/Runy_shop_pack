<?php

namespace App\Livewire\Admin\Accounting;


use App\Models\User;
use Carbon\Carbon;
use Cart\Models\Transaction;
use Livewire\Component;
use RunyAccounting\Models\Accounting;

class IndexAccounting extends Component
{
    public $statement_id , $statement_name , $statement_type , $item_type , $item_id , $credit, $credit_limit ,$software_code,$vat_id ;
    public function mount()
    {
        $acc = Accounting::query()->first();
        if ($acc == null){
            $this->statement_id = '01-003-001-00001' ;
        }else{
            $this->statement_id = $acc->statement_id ;
        }

        //dd($this->statement_id);
    }
    public function render()
    {
        return view('livewire.admin.accounting.index-accounting' , [
            'transactions' => Transaction::query()->whereDate('created_at', Carbon::now())
                ->get(),
            'yesterdayTransactions'=> Transaction::whereDate('created_at', Carbon::now()->subDays(2))->get(),
            'dayBefore30Transactions'=> Transaction::whereDate('created_at', '>=', Carbon::now()->subDays(30))
                ->whereDate('created_at', '<=', Carbon::now())->get(),
        ]);
    }

    protected $rules = [
        'statement_id' => 'required|min:6',
        'statement_name' => 'required|email',
    ];

    public function add_statement()
    {
        $accNew = new Accounting();
        $accNew->statement_id = $this->statement_id ;
        $accNew->statement_name = $this->statement_name ;
        $accNew->statement_type = $this->statement_type ;
        $accNew->item_type = $this->item_type ;
        $accNew->item_id = $this->item_id ;
        $accNew->credit = $this->credit ;
        $accNew->credit_limit = $this->credit_limit ;
        $accNew->software_code = $this->software_code ;
        $accNew->vat_id = $this->vat_id ;
        $accNew->save() ;
    }

    /*public function usersSync()
    {
        $users = User::query()->where('levelPermission', '>', 1)->get();
        $accs = Accounting::query()->get();
        foreach ($users as $user){
            $acc = Accounting::query()->where([
                'item_type' => 'کارمند',
                'item_id' => $user->id
            ])->first();

            if ($acc == null ){
                $accNew = new Accounting();
                $accNew->statement_id = '01-003-001-0000'.$user->id ;
                $accNew->statement_name = fullName($user->id) ;
                $accNew->statement_type = 'هردو' ;
                $accNew->item_type = 'کارمند' ;
                $accNew->item_id = $user->id ;
                $accNew->save() ;
            }

        }

    }*/
}
