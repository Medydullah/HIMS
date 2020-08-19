<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;


class DrugTable extends Model
{
    //
    use Notifiable;

    use HasRoles;

    protected $guard_name = 'drug';

    protected $fillable = [
        'drug_id', 'drug_name','price','child_dose', 'adult_dose', 'required_adult',
        'required_child',
    ];

}
