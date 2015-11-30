<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Open extends Model
{
    protected $fillable = ['message_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function message()
    {
        return $this->belongsTo('\App\Message');
    }
}
