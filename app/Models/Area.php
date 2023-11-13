<?php

namespace App\Models;

use App\Models\Outlet;
use App\Models\District;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Area extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['district'];

    public function district() {
        return $this->belongsTo(District::class);
    }

    public function outlets() {
        return $this->hasMany(Outlet::class)->orderBy('name');
    }
}
