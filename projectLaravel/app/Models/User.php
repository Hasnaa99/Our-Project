<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\House;
class User extends Model
{   
    use HasFactory;
    protected $fillable = ['name','age','phone'];
    public function house(){
        return $this->hasOne(House::class);
    }
}
