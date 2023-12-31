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
        Schema::create('repairs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('printer_id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('master_id');
            $table->text('description');
            $table->unsignedBigInteger('repair_status_id')->nullable();
            $table->float('price')->nullable();
            $table->date('completion_date')->nullable();
            $table->timestamps();

            $table->foreign('printer_id')->references('id')->on('printers');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('master_id')->references('id')->on('masters');
            $table->foreign('repair_status_id')->references('id')->on('repair_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repairs');
    }
};
