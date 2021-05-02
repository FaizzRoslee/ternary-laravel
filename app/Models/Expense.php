<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['company_name', 'pic_name', 'company_phone', 'details', 'date', 'payment_method',
        'bank_name', 'ref_number', 'amount', 'requester_name', 'requester_id', 'approver_name', 'approver_id',
        'approval_status', 'po_status', 'po_id', 'pr_status', 'pr_id', 'voucher_status', 'voucher_id'];

    public function setDateAttribute( $value ) {
        $this->attributes['date'] = (new Carbon($value))->format('d/m/y');
    }

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
