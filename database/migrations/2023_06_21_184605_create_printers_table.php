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
        Schema::create('printers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('printer_brand_id');
            $table->unsignedBigInteger('printer_model_id');
            $table->timestamps();

            $table->foreign('printer_brand_id')->references('id')->on('printer_brands');
            $table->foreign('printer_model_id')->references('id')->on('printer_models');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('printers');
    }
};
