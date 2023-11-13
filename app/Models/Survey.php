<?php

namespace App\Models;

use App\Models\Outlet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Survey extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    protected $with = ['outlet'];
    
    public function outlet() {
        return $this->belongsTo(Outlet::class);
    }
}