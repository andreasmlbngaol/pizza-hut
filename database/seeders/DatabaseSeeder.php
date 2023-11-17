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
        $districts = [
            [
                'name' => 'Sumatera Utara',
            ],
            [
                'name' => 'DKI Jakarta'
            ],
            [
                'name' => 'Admin'
            ]
        ];
        foreach($districts as $district) {
            District::create($district);
        }

        $areas = [
            [
                'name' => 'Sumut A',
                'district_id' => '1',
            ],
            [
                'name' => 'Sumut B',
                'district_id' => '1',
            ],
            [
                'name' => 'Sumut C',
                'district_id' => '1',
            ],
            [
                'name' => 'Jakarta A',
                'district_id' => '2',
            ],
            [
                'name' => 'Jakarta B',
                'district_id' => '2',
            ],
            [
                'name' => 'Jakarta C',
                'district_id' => '2',
            ],
            [
                'name' => 'Jakarta D',
                'district_id' => '2',
            ],
            [
                'name' => 'Admin',
                'district_id' => '3'
            ]
        ];
        foreach($areas as $area) {
            Area::create($area);
        }

        $users = [
            [
                'name' => 'Krakatau',
                'username' => 'krakatau',
                'area_id' => '1',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Pancing',
                'username' => 'pancing',
                'area_id' => '1',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Centre Point',
                'username' => 'centre_point',
                'area_id' => '1',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Medan Fair',
                'username' => 'medan_fair',
                'area_id' => '1',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Thamrin Plaza',
                'username' => 'thamrin_plaza',
                'area_id' => '1',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Sisingamangaraja',
                'username' => 'sisingamangaraja',
                'area_id' => '1',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Adam Malik',
                'username' => 'adam_malik',
                'area_id' => '2',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Setia Budi',
                'username' => 'setia_budi',
                'area_id' => '2',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'A.H.Nasution',
                'username' => 'a.h.nasution',
                'area_id' => '2',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Ring Road',
                'username' => 'ring_road',
                'area_id' => '2',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Tebing Tinggi',
                'username' => 'tebing_tinggi',
                'area_id' => '2',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Gajah Mada',
                'username' => 'gajah_mada',
                'area_id' => '3',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Lubuk Pakam',
                'username' => 'lubuk_pakam',
                'area_id' => '3',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Padang Sidempuan',
                'username' => 'padang_sidempuan',
                'area_id' => '3',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Pematang Siantar',
                'username' => 'pematang_siantar',
                'area_id' => '3',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Rantau Prapat',
                'username' => 'rantau_prapat',
                'area_id' => '3',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'PH Indonesia',
                'username' => 'ph_indonesia',
                'area_id' => '4',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Kebun Jeruk',
                'username' => 'kebun_jeruk',
                'area_id' => '4',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Kemanggisan',
                'username' => 'kemanggisan',
                'area_id' => '4',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Mangga Dua',
                'username' => 'mangga_dua',
                'area_id' => '4',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Juanda',
                'username' => 'juanda',
                'area_id' => '4',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Wahid Hasyim',
                'username' => 'wahid_hasyim',
                'area_id' => '4',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'ITC Kuningan',
                'username' => 'itc_kuningan',
                'area_id' => '5',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Kemang Raya',
                'username' => 'kemang_raya',
                'area_id' => '5',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Cilandak',
                'username' => 'cilandak',
                'area_id' => '5',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Casablanca',
                'username' => 'casablanca',
                'area_id' => '5',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Gatsu',
                'username' => 'gatsu',
                'area_id' => '5',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Buncit',
                'username' => 'buncit',
                'area_id' => '6',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Matraman Raya',
                'username' => 'matraman_raya',
                'area_id' => '6',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Cililitan',
                'username' => 'cililitan',
                'area_id' => '6',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'TB Simatupang',
                'username' => 'tb_simatupang',
                'area_id' => '6',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Cempaka Putih',
                'username' => 'cempaka_putih',
                'area_id' => '6',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Pemuda',
                'username' => 'pemuda',
                'area_id' => '7',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Jatiwaringin',
                'username' => 'jatiwaringin',
                'area_id' => '7',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Cakung',
                'username' => 'cakung',
                'area_id' => '7',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Admin',
                'username' => 'admin',
                'area_id' => '8',
                'password' => bcrypt('admin')
            ]
        ];
        foreach($users as $user) {
            User::create($user);
        }
        
        $positions = [
            ['name' => 'Team Member'],
            ['name' => 'Server'],
            ['name' => 'Delivery Driver'],
            ['name' => 'Cook'],
            ['name' => 'Shift Manager'],
            ['name' => 'Outlet Manager'],
            ['name' => 'General Manager'],
            ['name' => 'Area Coach'],
            ['name' => 'Above Restaurant Leader']
        ];
        foreach($positions as $position) {
            Position::create($position);
        }
        Employee::factory(2000)->create();
        Recipe::factory(30)->create();
        Selling::factory(2000)->create();
        Survey::factory(2000)->create();
    }
}
