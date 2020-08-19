<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;


class RequestDrug extends Model
{
    //
    use Notifiable;

    use HasRoles;

    protected $fillable = [
        'staff_id','email','drug_id', 'drug_name','quantity','category','date',
        ];

}
