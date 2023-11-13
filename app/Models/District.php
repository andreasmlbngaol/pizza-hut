<?php

namespace App\Models;

use App\Models\Area;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class District extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function areas() {
        return $this->hasMany(Area::class)->orderBy('name');
    }
}
