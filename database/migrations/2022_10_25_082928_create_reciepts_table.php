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
        Schema::create('reciepts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->boolean('is_modered')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('reciepts', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });

        // Schema::table('reciepts', function (Blueprint $table) {
        //     $table->unsignedBigInteger('user_id');
        //     $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reciepts');
    }
};
