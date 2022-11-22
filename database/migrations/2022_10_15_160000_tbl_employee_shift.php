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
        Schema::create('tblEmployeeShift', function (Blueprint $table) {
            $table->integer("intEmpShiftCode")->primary();
            $table->integer("intEmpCode");
            $table->integer("intShiftCode");
            $table->foreign('intShiftCode')->references('intShiftCode')->on('tblShift')->onDelete('cascade');
            $table->foreign('intEmpCode')->references('intEmpCode')->on('tblEmployee');
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
