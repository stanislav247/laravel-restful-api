<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiskModel extends Model
{
    protected $table = "disk";
    public $timestamps = false;

    protected $fillable = [
    	'Name',
    	'Size'
    ];
}
