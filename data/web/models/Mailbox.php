<?php

use Illuminate\Database\Eloquent\Model;

class Mailbox extends Model
{
    protected $table = 'mailbox';
    protected $fillable = [
      'username',
      'password',
      'name',
      'description',
      'mailbox_path_prefix',
      'quota',
      'local_part',
      'domain',
      'attributes',
      'custom_attributes',
      'kind',
      'multiple_bookings',
      'authsource',
      'active'
    ];

    protected $primaryKey = 'username';
    protected $keyType = 'string';

    public $incrementing = false;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $casts = [
        'attributes' => 'array',
        'custom_attributes' => 'array',
    ];

    public function domain()
    {
        return $this->belongsTo(Domain::class, 'domain', 'domain');
    }
}


