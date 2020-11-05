<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function user(){

        //Think of this relationship like SELECT * FROM USER WHERE PROJECT_ID = 1
        return $this->belongsTo(User::class);
    }
}
