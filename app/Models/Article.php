<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**----------------------------------------------
     * *                   Article Model
     *
     *
     *
     * TODO: define the relationships between articles , etc.
     *---------------------------------------------**/
use HasFactory;

public function capsLock($name) {

    return strtoupper($name);

}

}
