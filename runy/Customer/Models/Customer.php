<?php

namespace Customer\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Enums\CustomerTitle;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'family', 'cell', 'title'
    ];

    public function getCustomerTitleAttribute(): CustomerTitle
    {
        return CustomerTitle::from($this->attributes['title']);
    }

    public function setCustomerTitleAttribute(CustomerTitle $title): void
    {
        $this->attributes['title'] = $title->value;
    }

    public static function newCustomer($name, $family, $cell = null, $pic = null, $customer_user_id = null, $telephone = null, $address = null, $email = null, $company = null, $city = null, $type = null)
    {
        $newCustomer = new Customer();
        $newCustomer->name = $name;
        $newCustomer->family = $family;
        $newCustomer->cell = $cell;
        $newCustomer->pic = $pic;
        $newCustomer->customer_user_id = $customer_user_id;
        $newCustomer->telephone = $telephone;
        $newCustomer->address = $address;
        $newCustomer->email = $email;
        $newCustomer->company = $company;
        $newCustomer->city = $city;
        $newCustomer->type = $type;
        $newCustomer->save();
    }

    public static function createFastCustomer($name, $family, $cell , $customer_user_id=null)
    {
        $newCustomer = new Customer();
        $newCustomer->name = $name;
        $newCustomer->family = $family;
        $newCustomer->cell = $cell;
        $newCustomer->customer_user_id = $customer_user_id;
        $newCustomer->save();

        return $newCustomer ;
    }
}
