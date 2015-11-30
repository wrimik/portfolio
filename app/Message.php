<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $fillable = ['name', 'email', 'phone', 'message'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function opens()
    {
        return $this->hasMany('\App\Opens');
    }
}
