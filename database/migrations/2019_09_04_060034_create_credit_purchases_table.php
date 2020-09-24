<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('purchase_id');
            $table->string('credit_invoice',255);
            $table->integer('supplier_id');
            $table->dateTime('credit_invoice_date');
            $table->string('purchase_by',255);
            $table->string('total_qty',255);
            $table->string('total_amount',255);
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
        Schema::dropIfExists('credit_purchases');
    }
}
