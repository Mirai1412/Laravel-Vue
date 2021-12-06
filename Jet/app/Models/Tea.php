<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\type;

class Tea extends Model
{
    use HasFactory;

    public function company(){
        return $this->belongsTo(type::class);
    }
}