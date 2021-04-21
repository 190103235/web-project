<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TariffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tariff_table', function (Blueprint $table) {
            $table->id();
            $table->string('tariff_name');
            $table->string('tariff_price');
            $table->unsignedBigInteger('user_model2_id');
            $table->timestamps();

            $table->foreign('user_model2_id')->references('id')->on('user_table2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('tariff_table');
    }
}
