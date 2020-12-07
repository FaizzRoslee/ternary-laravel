<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentRequisition extends Model
{
    use HasFactory;

    public function expenses()
    {
        return $this->belongsTo(Expense::class);
    }
}
