<?php

use Illuminate\Database\Eloquent\Model;

class AliasDomain extends Model
{
    protected $table = 'alias_domain';
    protected $fillable = [
      'alias_domain', 'target_domain', 'active'
    ];
    protected $primaryKey = 'alias_domain';
    protected $keyType = 'string';

    public $incrementing = false;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function targetDomain()
    {
        return $this->belongsTo(Domain::class, 'target_domain', 'domain');
    }

    public function domainAdmins()
    {
        return $this->hasMany(DomainAdmin::class, 'domain', 'target_domain');
    }
}


