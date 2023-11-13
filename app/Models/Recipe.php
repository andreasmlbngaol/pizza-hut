<?php

namespace App\Models;

use App\Models\Outlet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipe extends Model
{
    use HasFactory;

    
    protected $guarded = ['id'];
    protected $with = ['outlets'];
    
    public function outlets() {
        return $this->belongsToMany(Outlet::class);
    }
}
