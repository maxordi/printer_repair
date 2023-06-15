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
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('master_id');
            $table->date('repair_date');
            $table->string('description');
            $table->decimal('cost', 8, 2);
            $table->foreign('printer_id')->references('id')->on('printers');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('master_id')->references('id')->on('masters');
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
        Schema::dropIfExists('repairs');
    }
};
