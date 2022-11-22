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
        Schema::create('tblEmployee', function (Blueprint $table) {
            $table->integer("intEmpCode")->primary();
            $table->string("strEmpName");
            $table->string("strCNICNo")->unique();
            $table->string("strEmpFatherName");
            $table->string("strPhone");
            $table->string("strAddress");
            $table->integer("intEmpManagerCode")->nullable();
            $table->integer("intDepartmentCode")->nullable();
            $table->foreign('intDepartmentCode')->references('intDepartmentCode')->on('tblDepartment')->onDelete('cascade');

        });

        Schema::table('tblEmployee',function (Blueprint $table){
            $table->foreign('intEmpManagerCode')->references('intEmpCode')->on('tblEmployee');
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
