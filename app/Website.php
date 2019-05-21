<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    protected $table = 'websites';


    public function contact()
    {
        return $this->hasOne('App\Contact', 'contact_id', 'id');
    }
}
