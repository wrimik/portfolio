<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $fillable = ['name', 'email', 'phone', 'comments'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function opens()
    {
        return $this->hasMany('\App\Opens');
    }
}
