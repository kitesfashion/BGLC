<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vendor_serial',255);
            $table->string('vendorName',255);
            $table->string('contactPerson',255);
            $table->text('vendorAddress');
            $table->string('vendorPhone',255);
            $table->string('vendorEmail',255);
            $table->string('accountCode',255);
            $table->integer('orderBy');
            $table->integer('vendorStatus');
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
        Schema::dropIfExists('vendors');
    }
}
