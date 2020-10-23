<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecordModel extends Model
{
    protected $table = "records";
    public $timestamps = false;

    protected $fillable = [
    	'Name',
    	'CPU',
    	'Memory'
    ];
}
