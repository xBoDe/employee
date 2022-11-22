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
        Schema::create('tblShift', function (Blueprint $table) {
            $table->integer("intShiftCode")->primary();
            $table->string("strShiftName",50);
            $table->dateTime("dtStart");
            $table->dateTime("dtEnd");
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
    }
};
