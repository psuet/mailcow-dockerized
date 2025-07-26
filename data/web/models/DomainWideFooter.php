<?php

use Illuminate\Database\Eloquent\Model;

class DomainWideFooter extends Model
{
    protected $table = 'domain_wide_footer';
    protected $fillable = [
      'domain', 'html', 'plain', 'mbox_exclude', 'alias_domain_exclude', 'skip_replies'
    ];
    protected $primaryKey = 'domain';
    protected $keyType = 'string';

    public $incrementing = false;

    public $timestamps = false;

    public function domain()
    {
        return $this->belongsTo(Domain::class, 'domain', 'domain');
    }
}


