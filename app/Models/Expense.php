<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    public function vouchers()
    {
        return $this->hasMany(Voucher::class);
    }

    public function orders()
    {
        return $this->hasMany(PurchaseOrder::class);
    }

    public function requisitions()
    {
        return $this->hasMany(PaymentRequisition::class);
    }
}
