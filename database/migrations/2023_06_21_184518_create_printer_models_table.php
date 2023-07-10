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
        Schema::create('printer_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('printer_brand_id')->nullable();
            $table->string('name');
            $table->timestamps();

            $table->foreign('printer_brand_id')->references('id')->on('printer_brands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('printer_models');
    }
};
