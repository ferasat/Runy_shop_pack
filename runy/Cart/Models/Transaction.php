<?php

namespace Cart\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;


    const STATUS_SUCCESS = 2;
    const STATUS_PENDING = 1;
    const STATUS_FAILED = 0;

    protected $fillable = [
        'user_id',
        'res_code',
        'payment_id',
        'paid',
        'status',
        'invoice_details',
        'invoice_id',
        'transaction_id',
        'transaction_result',
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class );
    }

    public function subject_invoice($id)
    {
        $invoice = Invoice::find($id);
        return $invoice -> subject ;
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getInvoiceDetailsAttribute()
    {
        return unserialize($this->attributes['invoice_details']);
    }

    public function setInvoiceDetailsAttribute($value)
    {
        $this->attributes['invoice_details'] = serialize($value);
    }

    public function getTransactionResultAttribute()
    {
        return unserialize($this->attributes['transaction_result']);
    }

    public function setTransactionResultAttribute($value)
    {
        //dd((string) $value);
        //$this->attributes['transaction_result'] = serialize($value);
        //$this->attributes['transaction_result'] = $value->toString();
        $this->attributes['transaction_result'] = (string) $value;
    }

    public function scopeStatus($query, int $status)
    {
        return $query->where('status', $status);
    }
}
