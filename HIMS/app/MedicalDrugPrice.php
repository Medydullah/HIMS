<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;


class MedicalDrugPrice extends Model
{
    //
    use Notifiable;

    use HasRoles;

    protected $guard_name = 'drug';

    protected $fillable = [
        'service_id', 'service_name','price','category',
    ];

}
