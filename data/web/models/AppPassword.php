<?php

use Illuminate\Database\Eloquent\Model;

class AppPassword extends Model
{
    protected $table = 'app_passwd';
    protected $fillable = [
      'name',
      'mailbox',
      'domain',
      'password',
      'imap_access',
      'smtp_access',
      'dav_access',
      'eas_access',
      'pop3_access',
      'sieve_access',
      'active'
    ];

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $casts = [
        'attributes' => 'array',
        'custom_attributes' => 'array',
    ];

    public function mailbox()
    {
        return $this->belongsTo(Mailbox::class, 'mailbox', 'username');
    }

    public function domain()
    {
        return $this->belongsTo(Domain::class, 'domain', 'domain');
    }
}


