<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function ReadingTime(){
        return $this -> belongsTo(ReadingTime::class);
    }

}
