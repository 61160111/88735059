<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ACCTypeModel extends Model
{
    protected $table="ACCType"
    protected $fillable=[
        'Type_No','Type_Name','DateBegin','DateEnd','Rate'
    ];
}
