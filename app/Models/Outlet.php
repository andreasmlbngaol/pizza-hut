<?php

namespace App\Models;

use App\Models\Area;
use App\Models\Recipe;
use App\Models\Survey;
use App\Models\Account;
use App\Models\Selling;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Outlet extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['area'];

    public function area() {
        return $this->belongsTo(Area::class);
    }

    public function sellings() {
        return $this->hasMany(Selling::class);
    }

    public function surveys() {
        return $this->hasMany(Survey::class);
    }

    public function recipes() {
        return $this->hasMany(Recipe::class);
    }

    public function account() {
        return $this->hasOne(Account::class);
    }
}
