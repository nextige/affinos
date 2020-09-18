<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['name', 'price', "recurrance_id", "headline", "description",'additional_user'];

    public function recurrance()
    {
        return $this->hasOne('App\Recurrance', 'id', "recurrance_id");
    }
}
