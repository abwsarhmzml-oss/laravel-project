<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    protected $table ='postes';
    protected $fillable =[
        'titel','description'
    ];
}
