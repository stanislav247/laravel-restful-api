<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NetworkModel extends Model
{
    protected $table = "network";
    public $timestamps = false;

    protected $fillable = [
    	'Name',
    	'Data'
    ];
}
