<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblDocument extends Model
{
    use HasFactory;

    protected $table = 'tblDocument';
    protected $primaryKey = "intDocCode";
    public $incrementing = false;
    protected $keyType = 'int';
}
