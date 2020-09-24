<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashPurchaseItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_purchase_item', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cash_puchase_id');
            $table->integer('product_id');
            $table->string('qty',255);
            $table->string('rate',255);
            $table->string('amount',255);
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
        Schema::dropIfExists('cash_purchase_item');
    }
}
