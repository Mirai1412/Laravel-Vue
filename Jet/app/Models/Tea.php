<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tea extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'name', 'price', 'text','image'];

    protected $guarded = [];

    public function type(){
        return $this->belongsTo(Type::class);
    }
    public function getImageAttribute($value){
        return 'storage/' . $value; // Accesser
    }

}
