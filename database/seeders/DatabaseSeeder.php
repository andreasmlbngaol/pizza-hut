<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Area;
use App\Models\Outlet;
use App\Models\Recipe;
use App\Models\Survey;
use App\Models\Account;
use App\Models\Selling;
use App\Models\District;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        District::factory(38)->create();
        Area::factory(100)->create();
        Outlet::factory(600)->create();
        Account::factory(600)->create();
        Employee::factory(2000)->create();
        Position::factory(10)->create();
        Recipe::factory(30)->create();
        Selling::factory(2000)->create();
        Survey::factory(2000)->create();
    }
}
