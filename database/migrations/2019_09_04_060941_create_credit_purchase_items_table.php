<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditPurchaseItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_purchase_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('credit_puchase_id');
            $table->string('item',255);
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
        Schema::dropIfExists('credit_purchase_items');
    }
}
