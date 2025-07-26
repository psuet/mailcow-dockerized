<?php

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $table = 'domain';
    protected $fillable = [
      'domain', 'description', 'aliases', 'mailboxes', 'defquota',
      'maxquota', 'quota', 'relayhost', 'backupmx', 'gal',
      'relay_all_recipients', 'relay_unknown_only', 'active'
    ];
    protected $primaryKey = 'domain';
    protected $keyType = 'string';

    public $incrementing = false;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function aliasDomains()
    {
        return $this->hasMany(AliasDomain::class, 'target_domain', 'domain');
    }

    public function domainAdmins()
    {
        return $this->hasMany(DomainAdmin::class, 'domain', 'domain');
    }

    public function domainWideFooter()
    {
        return $this->hasOne(DomainWideFooter::class, 'domain', 'domain');
    }
}


