<?php

namespace App\Livewire\Admin\Accounting\Invoice;

use Cart\Models\Invoice;
use Livewire\Component;

class InvoiceInfoToTransaction extends Component
{
    public $invoice_id ;
    public function render()
    {
        $invoice = Invoice::query()->find($this->invoice_id);
        return view('livewire.admin.accounting.invoice.invoice-info-to-transaction', compact('invoice'));
    }
}
