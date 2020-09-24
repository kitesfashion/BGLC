<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrderReceiveItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_order_receive_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('purchase_order_receive_id');
            $table->string('product_id',255);
            $table->string('product_name',255);
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
        Schema::dropIfExists('purchase_order_receive_items');
    }
}
