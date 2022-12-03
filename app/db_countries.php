<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class db_countries extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'countrys';
    public $timestamps = false;
}
