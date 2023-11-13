<?php

namespace App\Models;

use App\Models\Outlet;
use App\Models\Position;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    
    protected $guarded = ['id'];
    protected $with = ['outlet', 'position'];
    
    public function outlet() {
        return $this->belongsTo(Outlet::class);
    }

    public function position() {
        return $this->belongsTo(Position::class);
    }
}
