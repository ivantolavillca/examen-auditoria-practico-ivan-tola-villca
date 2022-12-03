<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class db_supervisor_has_agent extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;   
    protected $table = 'agent_has_supervisor';
    public $timestamps = false;
}
