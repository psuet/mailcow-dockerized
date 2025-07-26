<?php

use Illuminate\Database\Eloquent\Model;

class Alias extends Model
{
    protected $table = 'alias';
    protected $fillable = [
      'address', 'goto', 'domain', 'private_comment', 'public_comment', 'sogo_visible', 'active'
    ];

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function domain()
    {
        return $this->belongsTo(Domain::class, 'domain', 'domain');
    }
}


