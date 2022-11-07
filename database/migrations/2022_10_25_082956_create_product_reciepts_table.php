<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_reciepts', function (Blueprint $table) {
            
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('receipt_id');
            $table->float('measure');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('product_id')->on('id')->references('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_reciepts');
    }
};
