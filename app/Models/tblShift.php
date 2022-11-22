<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblShift extends Model
{
    use HasFactory;
    protected $table = 'tblShift';
    protected $primaryKey = "intShiftCode";
    public $incrementing = false;
    protected $keyType = 'int';
}
