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
        Schema::create('tblDocument', function (Blueprint $table) {
            $table->integer("intDocCode")->primary();
            $table->string("strDocName",50);
            $table->integer("intEmpCode");
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
