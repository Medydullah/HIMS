<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;


use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //
    use Notifiable;

    use HasRoles;


    protected $fillable = [
        'name','region_id'
    ];

    public function region(){
        return $this->belongsTo(Region::class);
    }
}
