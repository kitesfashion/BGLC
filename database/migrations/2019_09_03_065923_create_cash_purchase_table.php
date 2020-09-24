<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashPurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_purchase', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cash_serial',255);
            $table->string('voucher_no',255);
            $table->integer('supplier_id');
            $table->dateTime('voucher_date');
            $table->integer('orderBy');
            $table->integer('voucherStatus');
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
        Schema::dropIfExists('cash_purchase');
    }
}
