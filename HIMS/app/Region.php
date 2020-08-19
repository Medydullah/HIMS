<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;


class Region extends Model
{
    //
    use Notifiable;

    use HasRoles;


    protected $fillable = [
        'name','country_id'
    ];
    public function districts()
        {
            return $this->hasMany(District::class);
        }
    }


