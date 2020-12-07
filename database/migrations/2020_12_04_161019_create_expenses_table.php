<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('pic_name')->nullable();
            $table->string('company_phone');
            $table->longText('details');
            $table->date('date');
            $table->string('payment_method');
            $table->string('bank_name');
            $table->string('ref_number');
            $table->double('amount');
            $table->string('requester_name');
            $table->string('requester_id');
            $table->string('approver_name');
            $table->string('approver_id');
            $table->string('approval_status')->default('0');
            $table->string('po_status')->default('0');
            $table->string('po_id')->nullable();
            $table->string('pr_status')->default('0');
            $table->string('pr_id')->nullable();
            $table->string('voucher_status')->default('0');
            $table->string('voucher_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}
