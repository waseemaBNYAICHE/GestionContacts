<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;
protected $table="categories";
    public function contacts(){
        return $this->belongsTo(Contacts::class);
    }
}

