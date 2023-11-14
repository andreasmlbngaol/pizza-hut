<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Area;
use App\Models\User;
use App\Models\Outlet;
use App\Models\Recipe;
use App\Models\Survey;
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
        District::factory(30)->create();
        Area::factory(100)->create();
        Outlet::factory(600)->create();
        User::factory(600)->create();
        Employee::factory(2000)->create();
        $positions = [
            ['name' => 'Team Member'],
            ['name' => 'Server'],
            ['name' => 'Delivery Driver'],
            ['name' => 'Cook'],
            ['name' => 'Shift Manager'],
            ['name' => 'Assistant Manager'],
            ['name' => 'General Manager'],
            ['name' => 'Area Coach'],
            ['name' => 'Above Restaurant Leader']
        ];
        foreach($positions as $position) {
            Position::create($position);
        }
        Recipe::factory(30)->create();
        Selling::factory(2000)->create();
        Survey::factory(2000)->create();
        
        // Admin
        Outlet::create([
            'name' => 'Admin',
            'area_id' => '1',
        ]);
        User::create([
            'username' => 'admin',
            'password' => bcrypt('admin')
        ]);
    }
}
