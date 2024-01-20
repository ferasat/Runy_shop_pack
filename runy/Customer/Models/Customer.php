<?php

namespace Customer\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function newCustomer($name, $family, $cell = null, $pic = null, $customer_user_id = null, $telephone = null, $address = null, $email = null, $company = null, $city = null, $type = null)
    {
        $newCustomer = new Customer();
        $newCustomer->name = $name ;
        $newCustomer->family = $family ;
        $newCustomer->cell = $cell ;
        $newCustomer->pic = $pic ;
        $newCustomer->customer_user_id = $customer_user_id ;
        $newCustomer->telephone = $telephone ;
        $newCustomer->address = $address ;
        $newCustomer->email = $email ;
        $newCustomer->company = $company ;
        $newCustomer->city = $city ;
        $newCustomer->type = $type ;
        $newCustomer->save() ;
    }
}
