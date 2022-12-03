<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class db_close_day extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'close_day';
    public $timestamps = false;
}
