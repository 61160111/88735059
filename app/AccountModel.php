<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountModel extends Model
{
    protected $table="Account"
    protected $fillable=[
        'Acc_No','Type_No','Acc_Name','Acc_Surname','Address','SubDistrict',
        'District','Province','ZipCode','DateOp','Balance'
    ];
}
