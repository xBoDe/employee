<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblDepartment extends Model
{
    use HasFactory;

    protected $table = 'tblDepartment';
    protected $primaryKey = "intDepartmentCode";
    public $incrementing = false;
    protected $keyType = 'int';


}
