<?php

use Illuminate\Database\Eloquent\Model;

class DomainAdmin extends Model
{
    protected $table = 'domain_admins';
    protected $fillable = [
      'username', 'domain', 'active'
    ];

    const CREATED_AT = 'created';
    const UPDATED_AT = NULL; // No updated_at field in this table

    public function domain()
    {
        return $this->belongsTo(Domain::class, 'domain', 'domain');
    }

    public function aliasDomain()
    {
        return $this->belongsTo(AliasDomain::class, 'target_domain', 'domain');
    }

}


