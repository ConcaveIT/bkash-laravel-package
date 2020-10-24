<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBkashResponseTable extends Migration
{    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bkash_response', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->string('currency');
            $table->decimal('amount', 12, 2);
            $table->string('invoice');
            $table->string('trxID')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('bkash_response');
    }
}
