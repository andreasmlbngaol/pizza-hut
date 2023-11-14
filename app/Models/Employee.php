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
    protected $with = ['user', 'position'];
    
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function position() {
        return $this->belongsTo(Position::class);
    }
}
