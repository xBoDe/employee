<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblEmployee extends Model
{
    use HasFactory;
    protected $table = 'tblEmployee';
    protected $primaryKey = "intEmpCode";
    public $incrementing = false;
    protected $keyType = 'int';
    public $timestamps = false;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'intEmpCode',
        'strEmpName',
        'strCNICNo',
        'strEmpFatherName',
        'strPhone',
        'strAddress',
        'intDepartmentCode',
        'intEmpManagerCode'
    ];
}
