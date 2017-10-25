<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    public function comments()
    {
    	return $this->hasMany("App\Comment");
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 3ef4de193ac90cca66d937714e463720c25124dd
