<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblEmployeeShift extends Model
{
    use HasFactory;

    protected $table = 'tblEmployeeShift';
    protected $primaryKey = "intEmpShiftCode";
    public $incrementing = false;
    protected $keyType = 'int';
}
