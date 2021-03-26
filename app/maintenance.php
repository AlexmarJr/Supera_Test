<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maintenance extends Model
{
    protected $table = 'maintenances';

    protected $fillable = ['user_id','car', 'client_name', 'observation', 'maintenance_date'];
}
