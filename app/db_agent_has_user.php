<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class db_agent_has_user extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'agent_has_client';
    public $timestamps = false;
}
